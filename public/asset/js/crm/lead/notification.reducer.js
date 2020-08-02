/**
 * 
 */
NhanhNotification.prototype.dispatch = function(action, data={}){
	let prevState = JSON.parse(JSON.stringify(this.state));
	this.reduce(action, data);
	this.componentDidUpdate(prevState);
	
}

NhanhNotification.prototype.keyIsDeviceTokenSentToServer = 'firebaseMessagingTokenSentToServer';
NhanhNotification.prototype.keyCurrentUser = 'firebaseMessagingUserId';
NhanhNotification.prototype.keyFirebaseAuthenToken = 'firebaseAuthenToken';
NhanhNotification.prototype.keyDeviceToken = 'deviceToken';

NhanhNotification.prototype.reduce = function(action, data){
	let isExcuse = true;
	switch (action) {
		case 'INIT_STATE':
			this.state.isDeviceTokenSentToServer = window.localStorage.getItem(this.keyIsDeviceTokenSentToServer) === '1';
			this.state.firebaseAuthenToken = window.localStorage.getItem(this.keyFirebaseAuthenToken);
			this.state.currentUserId = window.localStorage.getItem(this.keyCurrentUser);
			this.state.deviceToken = window.localStorage.getItem(this.keyDeviceToken);
			break;
		case 'SET_HAS_MESSAGE_PERMISSION':
			this.state.hasMessagePermission = data;
			break;
		case 'SET_CURRENT_USER':
			this.state.currentUserId = data.currentUserId;
			this.state.isDeviceTokenSentToServer = data.isDeviceTokenSentToServer;
			this.state.deviceToken = data.deviceToken;
			break;
		case 'SET_DEVICE_TOKEN':
			this.state.deviceToken = data;
			break;
		case 'SET_DEVICETOKEN_SENTTOSERVER':
			this.state.isDeviceTokenSentToServer = data;
			
			break;
		case 'FINISH_INIT_MESSAGE':
			break;
		case 'SET_AUTHEN_TOKEN':
			this.state.firebaseAuthenToken = data;
			this.state.isNewAuthenToken = true;
			break;
		case 'CHECK_AUTHEN_TOKEN':
			this.state.isValidAuthenToken = data.isValid;
			this.state.uid = data.uid;
			break;
		case 'UPDATE_TOTAL_UNSEEN_MESSAGE':
			this.state.totalUnseenMessage = data;			
			break;
		case 'START_PROCESS':
			this.state.process = data;
			break;
		case 'UPDATE_MESSAGE_LIST':
			this.state.messages = data;
			this.state.process = 'none';
			break;		
		case 'OPEN_LIST_MESSAGE':
			this.state.isOpenList = true;
			break;
		case 'CLOSE_LIST_MESSAGE':
			this.state.isOpenList = false;
			break;
		case 'RE_SUBCRIBE':
			this.state = Object.assign({}, this.state, {
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
				isOpenList: false
			});
			break;
		case 'RECIVE_NOTIFICATION':
			this.state.newNotification = data;
			break;
		case 'SHOW_NOTIFICATION':
			this.state.showNotification = true;
			break;
		case 'HIDE_NOTIFICATION':
			this.state.showNotification = false;
			break;
		default:
			isExcuse = false;
			break;
	}
	if(isExcuse){
		this.state.lastAction = action;
	}
	
}
