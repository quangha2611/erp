/**
 * @author DuongNQ
 * @param compId (select project ID)
 * @param docCateId (select documentCategory ID)
 * @param sel (selected plan option)
 * Add Document Category (select parentId)
 */
var DocumentCategoryd = {
    load: function (compId, docCateId, type, depart) {
    	var de = depart ? depart : '#departmentId';
        var c = compId ? compId : '#companyId';
        var d = docCateId ? docCateId : '#docCateId';

        	      $(c).change(function () {
        	    	  $(de).val(null);
        	            if ($(this).val() && $(d).length) {
        	            	DocumentCategoryd.getCate($(this).val(),$(de).val(),2, d, '');
        	            }
        	        });


        	      $(de).change(function () {
        	            if ($(this).val() && $(d).length) {
        	            	DocumentCategoryd.getCate($(c).val(),$(this).val(),2, d, '');
        	            }
        	        });


    },
    getCate: function (compId, depart, type, docCateId, sel) {
        $.post(
            '/document/document/loadcategory?companyId=' + compId+'&type='+type,
            {},
            function (rp) {
            	if(rp.code){
            		DocumentCategoryd.updateCate(docCateId, rp.data, sel);
            	} else {
            		alert(rp.messages)
            	}

            },
            'json'
        );

    },
    updateCate: function (id, d, sel) {
        if ($(id).length) {
            var options = "";
            for (var i in d) {
                if (sel == i) {
                    options += "<option selected value='" + d[i].id + "'>" + d[i].name + "</option>";
                } else {
                    options += "<option value='" + d[i].id + "'>" + d[i].name + "</option>";
                }
            }
            if (!$(id).find('option:first').val()) {
                options = "<option value=''>" + $(id).find('option:first').text() + "</option>" + options;
            }
            $(id).html(options);
        }
    }
};

$(function(){
    $('#parentName').autocomplete({
		
		source: function(request, response){
			$.post(
				'/document/category/suggest',
				{
					'q' : request.term,
					'companyId': $('#companyId').val(),
				},
				function(rs){
					if(rs.code){
						response(rs.data);
					} else {
						response([]);
					}
				}
			);
		},
		minLength: 2,
		select: function(event, ui){
			$('#parentId').val(ui.item.id);
		},
	});

	Department.load('#companyId', '#departmentId');
	DocumentCategoryd.load	('#companyId', '#categoryId', 2, null);
	
	var i=0;

    $('#btnSaveDocumentdraft').click(function(){
			$.ajax({
	            url: '/document/document/adddraft',
	            type:'POST',
	            data: {content: $('iframe').contents().find('html').find('body').html(),
	            		id: $('#documentId').val() ? $('#documentId').val() : null,
	            		companyId: $('#companyId').val(),
	            		departmentId: $('#departmentId').val(),
	            		categoryId: $('#categoryId').val(),
	            		name:	'Draft_'+$('#name').val(),
	            },
	            success: function (rs){
	            if (rs.code=1){
	            	url = $('input[name=afterSubmit]:checked','#documentIndex').val();
	            	if (url=='/document/document/view'){
	            		window.location.replace('/document/document/view?id='+rs.messages);
	            	}else{
	            		window.location.replace(url);
	            	}
	              }
	            },
	        });
			}
		);
});
var s;
function saveDraft(ts){

        $.ajax({
            url: '/document/document/adddraft',
            type:'POST',
            data: {content: $('iframe').contents().find('html').find('body').html(),
            		id: $('#documentId').val() ? $('#documentId').val() : null,
            		companyId: $('#companyId').val(),
            		departmentId: $('#departmentId').val(),
            		categoryId: $('#categoryId').val(),
            		name:	'Draft_'+$('#name').val(),
            },
            success: function (code){
            	var dt = new Date();
        	$('#alertSave').fadeIn(1000);
        	$('#alertSave').html('Lưu tự động '+dt.getFullYear()+'-'+dt.getMonth()+'-'+dt.getDate()+' '+dt.getHours()+':'+dt.getMinutes()+':'+dt.getSeconds());
        	$('#alertSave').delay(3000).fadeOut(2000);
        	$('#documentId').val(code.messages);
        	return false;
            },
        });

}
    	
