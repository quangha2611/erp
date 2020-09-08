$(function(){
	Department.load('#companyId', '#departmentId');
    $('#productId').multiselect({
        enableCaseInsensitiveFiltering: true,
        nonSelectedText: 'Sản phẩm'
    });
	$("#departmentId").select2({dropdownAutoWidth : true});
	$('#dgExpriedProduct').on('click', '.pickup', function(){
		$('#confirmPickupModal .referId').val($(this).data('id'));
		var accountName = $(this).closest('tr').find('td:eq(1) a').text();
		$('#confirmPickupModal .accountName').text(accountName);
		$('#confirmPickupModal').modal('show');
	});
	
	$('#confirmPickupModal .btn-save').on('click', function(){
		$.post(
			'/crm/lead/setleaduser',
			{
				'crm_type': 'account',
				'id': $('#confirmPickupModal .referId').val(),
				'mode' : 'selfAssign',
				'saleIds' : 1
			}, 
			function(rs){
				$('#confirmPickupModal').modal('hide');
				if(typeof rs.code == 'undefined'){
					$('#errorModal .alert').html('Có lỗi trong quá trình thực hiện');
					$('#errorModal').modal('show');
				} else {
					if(rs.code){
						$('#successModal .alert').html('Bạn đã nhận chăm sóc nhân viên thành công. Bấm vào link khách hàng để về trang chi tiết khách hàng.');
						$('#successModal').modal('show');
					} else {
						$('#errorModal .alert').html(rs.messages.join('<br/>'));;
						$('#errorModal').modal('show');
					}
				}
			}
		)
	});
	
	$('#dgExpriedProduct').on('click', '.assign', function(){
		$('#confirmAssignModal .referId').val($(this).data('id'));
		var accountName = $(this).closest('tr').find('td:eq(1) a').text();
		$('#confirmAssignModal .accountName').text(accountName);
		$('#confirmAssignModal').modal('show');
	});
	
	$('#confirmAssignModal .assignToName').autocomplete({
		appendTo: '#confirmAssignModal .modal-body',
		source: function(request, response){
			$.post(
				'/system/user/suggest',
				{
					'q' : request.term
				},
				function(rs){
					if(rs.code){
						response(rs.data);
					}
				}
			);
		},
		minLength: 2,
		select: function(event, ui){
			$('#confirmAssignModal .assignToId').val(ui.item.id);
		},
	});
	$('#confirmAssignModal .assignToName').on('change', function(){
		if(!$(this).val()){
			$('#confirmAssignModal .assignToId').val('');
		}
	});
	
	$('#confirmAssignModal .btn-save').on('click', function(){
		$.post(
			'/crm/lead/addmultiuser',
			{
				'crm_type': 'account',
				'ids': $('#confirmAssignModal .referId').val(),
				'userIds' : {'1' : [$('#confirmAssignModal .assignToId').val()]},
				
			}, 
			function(rs){
				$('#confirmAssignModal').modal('hide');
				if(typeof rs.code == 'undefined'){
					$('#errorModal .alert').html('Có lỗi trong quá trình thực hiện');
					$('#errorModal').modal('show');
				} else {
					if(rs.code){
						$('#successModal .alert').html('Bạn đã bàn giao khách hàng thành công.');
						$('#successModal').modal('show');
					} else {
						$('#errorModal .alert').html(rs.messages.join('<br/>'));;
						$('#errorModal').modal('show');
					}
				}
			}
		)
	});
	
	$('#createdByName').autocomplete({
		source: function(request, response){
			$.post(
				'/system/user/suggest',
				{
					'q' : request.term
				},
				function(rs){
					if(rs.code){
						response(rs.data);
					}
				}
			);
		},
		minLength: 2,
		select: function(event, ui){
			$('#createdById').val(ui.item.id);
		},
	});
	$('#createdByName').on('change', function(){
		if(!$('#createdByName').val()){
			$('#createdById').val('');
		}
	});
});