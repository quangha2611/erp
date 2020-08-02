/**
 * 
 */
'use strict';
$(function(){
	window.nhanhNotification = new NhanhNotification();
})

function NhanhNotification() {
	if(!projectFirebaseConfig || !projectFirebaseConfig.code){
		return null;
	}
	
	// Kiểm tra trình duyệt hỗ trợ push notification hay không
	var isSafari = navigator.vendor && navigator.vendor.indexOf('Apple') > -1 &&
    	navigator.userAgent && !navigator.userAgent.match('CriOS');
	if(isSafari){
		console.log('Notification does not support Safari')
		return null;
	}
	
	
	firebase.initializeApp(projectFirebaseConfig.data.initConfig);
	
	this.messaging = firebase.messaging();	
	this.firestore = firebase.firestore();
	this.firestore.settings({
		timestampsInSnapshots: true
	})
	this.messaging.usePublicVapidKey(projectFirebaseConfig.data.publicVapidKey);
	let that = this;
	if ('serviceWorker' in navigator) {
		navigator.serviceWorker.register('/sw.js')
		  .then(function(registration) {
			  console.log('Registration successful, scope is:', registration.scope);
			  that.messaging.useServiceWorker(registration)		    
		  })
		  .catch(function(error) {
		    console.log('Service worker registration failed, error:', error);
		  });
	}
	
	this.state = {
		isDeviceTokenSentToServer: false,
		deviceToken: '',
		currentUserId: null,
		hasMessagePermission: false,
		firebaseAuthenToken: '',
		isNewAuthenToken: false,
		uid: '',
		totalUnseenMessage: 0,
		messages: [],
		process: 'none',
		isOpenList: false,
		newNotification: null,
		showNotification: false
	}
	this.dispatch('INIT_STATE');
	
	this.messaging.requestPermission().then(() => {
		this.dispatch('SET_HAS_MESSAGE_PERMISSION', true)
	}).catch((err) => {
		this.dispatch('SET_HAS_MESSAGE_PERMISSION', false)
	})
	
	this.messaging.onTokenRefresh(function(){
		that.reSubcibe();
	});
	this.messaging.onMessage(function(payload){
		that.recieveNotification(payload);
	});
	
}

NhanhNotification.prototype.componentDidUpdate = function (prevState){
	if(JSON.stringify(prevState.lastAction) == JSON.stringify(this.state.lastAction)){
		return null;
	}	
	
	switch (this.state.lastAction) {
		case 'SET_HAS_MESSAGE_PERMISSION':
			if(this.state.hasMessagePermission){
				this.setCurrentUser();
			}
		case 'RE_SUBCRIBE':
		case 'SET_CURRENT_USER':		
			this.getDeviceToken();
			break;
		case 'SET_DEVICE_TOKEN':
			this.sendDeviceTokenToServer();
			break;
		case 'SET_DEVICETOKEN_SENTTOSERVER':
		case 'FINISH_INIT_MESSAGE':
			if(!this.state.firebaseAuthenToken){
				this.setAuthenToken();
			} else {
				this.checkAuthen();
			}
			break;
		case 'SET_AUTHEN_TOKEN':
			this.checkAuthen();
			break;
		case 'CHECK_AUTHEN_TOKEN':
			if(!this.state.isValidAuthenToken && !this.state.isNewAuthenToken ){
				this.setAuthenToken();
			}
			if(this.state.isValidAuthenToken){
				this.initFireStoreListener();
			}
			break;
		case 'OPEN_LIST_MESSAGE':
			this.loadMessageList();
			break;
		case 'UPDATE_MESSAGE_LIST':
			this.mockUpdateTotalUnseen();
			break;
		case 'RECIVE_NOTIFICATION':
			this.dispatch('SHOW_NOTIFICATION');
			break;
		case 'SHOW_NOTIFICATION':
			setTimeout(() => {		
				this.dispatch('HIDE_NOTIFICATION');
			}, 10000)
			
			break;	
		default:
			break;
	}
	this.triggleRender(prevState);
}
NhanhNotification.prototype.triggleRender = function(prevState){
	if(this.state.totalUnseenMessage != prevState.totalUnseenMessage){
		this.viewRenderUnseen();
	}
	if(this.state.process != prevState.process
		|| JSON.stringify(this.state.messages) != JSON.stringify(prevState.messages)){
		this.renderListMessage();
	}
	if(this.state.showNotification != prevState.showNotification){
		if(this.state.showNotification){
			this.showNotification();
		} else {
			this.hideNotification();
		}
	}
	
}

NhanhNotification.prototype.reSubcibe = function(){
	window.localStorage.setItem(this.keyIsDeviceTokenSentToServer, '0');
	window.localStorage.setItem(this.keyFirebaseAuthenToken, '');
	window.localStorage.setItem(this.keyCurrentUser, '');
	window.localStorage.setItem(this.keyDeviceToken, '');
	this.dispatch('RE_SUBCRIBE');
}

NhanhNotification.prototype.setCurrentUser = function(){
	if(!this.state.currentUserId || this.state.currentUserId != currentNhanhUserId){
		window.localStorage.setItem(this.keyCurrentUser, currentNhanhUserId);	
		window.localStorage.setItem(this.keyIsDeviceTokenSentToServer, '0');	
		window.localStorage.setItem(this.keyFirebaseAuthenToken, '');			
		this.dispatch('SET_CURRENT_USER', {
			currentUserId: currentNhanhUserId,
			isDeviceTokenSentToServer: false,
			deviceToken: '',			
		});
	} else {
		this.dispatch('SET_CURRENT_USER', {
			currentUserId: currentNhanhUserId,
			isDeviceTokenSentToServer: this.state.isDeviceTokenSentToServer,
			deviceToken: this.state.deviceToken,			
		});
	}
	
}

NhanhNotification.prototype.getDeviceToken = function(){
	let that = this;
	if(this.state.isDeviceTokenSentToServer){
		this.dispatch('FINISH_INIT_MESSAGE');
		return null;
	}
	this.messaging.getToken().then(currentToken => {
		if(currentToken){
			window.localStorage.setItem(this.keyDeviceToken, currentToken);	
			that.dispatch('SET_DEVICE_TOKEN', currentToken);
		} else {
			console.log('No Instance Firebase messaging ID token available.');
		}
	})
}

NhanhNotification.prototype.sendDeviceTokenToServer = function(){
	let that = this;
	this.mockSendDeviceTokenToServer()
		.then(isSent => {			
			window.localStorage.setItem(that.keyIsDeviceTokenSentToServer, isSent ? '1' : '0');
			that.dispatch('SET_DEVICETOKEN_SENTTOSERVER', isSent);			
		})
}

NhanhNotification.prototype.setAuthenToken = function(){
	let that = this;
	this.mockAuthenToken().then(token => {
		//window.localStorage.setItem(that.keyFirebaseAuthenToken, token);
		that.dispatch('SET_AUTHEN_TOKEN', token);		
	});
}

NhanhNotification.prototype.checkAuthen = function(){
	let that = this;
	firebase.auth().signInWithCustomToken(this.state.firebaseAuthenToken).then(rs => {	
		window.localStorage.setItem(that.keyFirebaseAuthenToken, that.state.firebaseAuthenToken);
		that.dispatch('CHECK_AUTHEN_TOKEN', {
			isValid: true,
			uid: firebase.auth().getUid()
			
		});		
		return null;
	}).catch(err => {
		console.log('opp!!', err)
		window.localStorage.setItem(that.keyFirebaseAuthenToken, '');
		that.dispatch('CHECK_AUTHEN_TOKEN', {
			isValid: false,
			uid: null
		});		
	})
}

NhanhNotification.prototype.loadMessageList = function(){
	if(this.state.process == 'loading-message'){
		return null;
	}
	
	this.dispatch('START_PROCESS', 'loading-message');
	this.mock10NewestMessage().then(list => {
		this.dispatch('UPDATE_MESSAGE_LIST', list);
	});		
}

NhanhNotification.prototype.recieveNotification = function(payload){
	this.dispatch('RECIVE_NOTIFICATION', payload);
}

NhanhNotification.prototype.initFireStoreListener = function(){	
	if(this.state.isValidAuthenToken){
		let that = this;
		// when update unseen		
		firebase
		    .firestore().collection('notification-tray').doc(this.state.uid)
			.onSnapshot(function(doc) {
				if(doc.exists){
					that.dispatch('UPDATE_TOTAL_UNSEEN_MESSAGE', doc.get('unseen') || 0);
					
					that.mock10NewestMessage();
				}
			});
		 
		$('#nn-bell .dropdown-toggle').on('click', function(){
			that.loadMessageList();
		});
		
		$('#nn-dialog .nn-container-link').on('click', function(){
			if(that.state.newNotification.data.web_click_action){			
				var pathname = window.location.pathname; 
				switch (pathname) {
					case '/work/task/add':
					case '/work/task/edit':
					case '/crm/contract/add':
					case '/crm/contract/edit':
					case '/company/announcement/add':
						var win = window.open(that.state.newNotification.data.web_click_action, '_blank');
						win.focus();
						break;
					default:
						location.href = that.state.newNotification.data.web_click_action;
						break;
				}
			} else {
				return false;
			}
		})
		$('#nn-dialog .nn-dislog-close').on('click', function(){
			$('#nn-dialog').removeClass('nn-dialog-show');
		});
		
		$('#nn-bell .dropdown-menu').on('click', '.notification-list-item', function(){
			location.href = $(this).data('url');
		})
	}
}

//[START MOCK == API ]

NhanhNotification.prototype.mockAuthenToken = function(){
	
	let that = this;
	return new Promise(function(resolve, reject){
		$.post('/home/index/getnotificationtoken', {}, 
		function(rs){			
			if(rs.code){				
				resolve(rs.data.customToken);
				return true;
			} else {				
				console.log('Can not get Authen Token ', rs.message)
				reject('Can not get Authen Token');
				return false;
			}
		}).fail(function(error){			
			console.log('Can not get Authen Token ', error);
			reject('Can not get Authen Token');
			return false;
		})
	})
}

NhanhNotification.prototype.mockSendDeviceTokenToServer = function(token){
	let that = this;
	return new Promise(function(resolve, reject){			
		$.post('/home/index/registnotification', {
			token: that.state.deviceToken
		}, function(rs){
			if(rs.code){				
				resolve(true);
				return true;
			} else {				
				resolve(false);
				return false;
			}
		}).fail(function(error){
			resolve(false);
			return false;
		})
	})
}

NhanhNotification.prototype.mock10NewestMessage = function(){
	let that = this
	return new Promise(function(resolve, reject){
		firebase
	    .firestore().collection('notification-tray').doc(that.state.uid)
	    .collection('messages').orderBy('createdDateTime', 'desc').limit(10)
	    .get().then(snap => {
	    	let result = snap.docs.map(doc => {
	    		const createdDate= moment(doc.get('createdDateTime').toDate())
	    		
	    		return {
	    			data: doc.get('formData'),
	    			createdDateTime: createdDate.fromNow(),
	    		}
	    	})
	    	resolve(result);
	    })
	})
}

NhanhNotification.prototype.mockUpdateTotalUnseen = function(value=0){
	let that = this
	return firebase
	    .firestore().collection('notification-tray').doc(this.state.uid)
	    .update({
	    	unseen: parseInt(value)
	    })
	
}
// [END MOCK]

// [START RENDER]

NhanhNotification.prototype.viewRenderUnseen = function(){
	if(this.state.totalUnseenMessage){
		$('#nn-bell .count').text(this.state.totalUnseenMessage);
	} else {
		$('#nn-bell .count').text('');
	}
	
}

NhanhNotification.prototype.listMessageItemTemplate = `<li class="notification-list-item">												
<div class="nli-container">
<div class="nli-icon">
	<i class="fa fa-bell fa-lg"></i>
</div>
<div class="nli-content">
	<div class="nli-title">
		
	</div>
	<div class="nli-body">
		
	</div>
	<div class="nli-time fontsize-85 text-muted">
		<i class="fa fa-clock-o"></i> <span></span>
	</div>
</div>
</div>												
</li>`

NhanhNotification.prototype.renderListMessage = function(){
	if(this.state.process == 'loading-message'){
		$('#nn-bell .dropdown-menu').empty();
		$('#nn-bell .dropdown-menu').append('<li class="notification-header"><div style="text-align:center;"><i class="fa fa-cog fa-spin"></i></div></li>');
	} else {
		$('#nn-bell .dropdown-menu').empty();
		for(const message of this.state.messages){
			const item = $(this.listMessageItemTemplate);
			item.data('url', message.data.web_click_action)
			item.find('.nli-title').text(message.data.title);
			item.find('.nli-body').text(message.data.body);
			item.find('.nli-time span').text(message.createdDateTime);
			$('#nn-bell .dropdown-menu').append(item);
		}
	}	
}
NhanhNotification.prototype.showNotification =  function(){
	if(this.state.newNotification.data.web_icon){
		$('#nn-dialog .nn-icon').html('<img src="' + this.state.newNotification.data.web_icon + '"/>')
	}	
	$('#nn-dialog .nn-content-title').text(this.state.newNotification.data.title);
	$('#nn-dialog .nn-content-body').text(this.state.newNotification.data.body);
	
	$('#nn-dialog').addClass('nn-dialog-show');
	
	
}

NhanhNotification.prototype.hideNotification =  function(){
	$('#nn-dialog').removeClass('nn-dialog-show')
}

