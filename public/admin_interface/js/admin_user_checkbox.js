
$('#view_user').fadeOut(2000);
$('#edit_user').fadeOut(2000);
$('#delete_user').fadeOut(2000);

var checkBoxes = $('input[type=checkbox]');
var checked=0;

$('.table tr').click(function(event){
	checked=1;
	$('#view_user').fadeIn(1000);
	$('#edit_user').fadeIn(1000);
	$('#delete_user').fadeIn(1000);

	if(event.target.type!=='checkbox'){
		$(':checkbox',this).trigger('click');
	}
	$('.table tr').on('click','input[type=checkbox]',function(){
		checkBoxes.prop('checked',false);
		$(this).prop('checked',true);
	});
	$(this).addClass("selected").siblings().removeClass("selected");
});

/*Show detail User*/

$("#view_user").click(function(){
	event.preventDefault();
	if(checked==0){
		$("#viewuser_errorModal").modal('show');
	}
	if(checked==1){
		$("#viewModal").modal('show');
		$(".table input:checkbox:checked").map(function(){
			var searchID=[];
			searchID.push($(this).val());
			id=searchID[0];
			$.ajax({
				url:'/dientudandung/admin/user/infomation',
				type:'GET',
				data:{"id":id},
				success: function(result){
					$('#viewModal').modal('show');
					if(result.info.level==0){
						var level="Super_Admin";
					}
					if(result.info.level==1){
						var level="Admin";
					}
					if(result.info.level==2){
						var level="Member";
					}


					$("#view_tittlename").text(result.info.name);
					$("#view_username").text(result.info.email);
					$("#view_userlevel").text(level);
					var d = new Date();
						var my_date_format = function(input){
						  var d = new Date(Date.parse(input.replace(/-/g, "/")));

						  var month = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

						  var date = d.getDay().toString() + " " + month[d.getMonth().toString()] + ", " +    d.getFullYear().toString();
						  var time = d.toLocaleTimeString().toLowerCase().replace(/([\d]+:[\d]+):[\d]+(\s\w+)/g, "$1$2");
						  return (time + " " + date);

						};
					$("#view_usercreated").text(my_date_format(result.info.created_at));
				}
			})
		})
	}
});

/*Add User*/
	$('#add_user').click(function(){
		$('#addModal').modal('show');

		$("#validate_add_user").validate({
			rules:{
				add_name:{
					required:true
				},
				add_email:{
					required:true
				},
				add_password:{
					required:true
				},
				add_password_confirmation:{
					required:true
				}
			},
			messages:{
				add_name:{
					required: "Please enter username."
				},
				add_password:{
					required: "Please enter password."
				}
			},
			submitHandler:function(){
				$.ajaxSetup({
				    headers: {
				        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				    }
				});
				$.ajax({
					'url' : 'http://localhost/dientudandung/admin/user/add',
					'type' :'POST',
					'data': {
						'add_name' : $('#add_name').val(),
						'add_email' : $('#add_email').val(),
						'add_level_user' : $('#add_level_user').val(),
						'add_password':$('#add_password').val(),
						'add_password_confirmation':$('#add_password_confirmation').val()
					},
					success: function(data){
						console.log(data);
						if(data.error_add_user ==true){
							$('.error').hide();
							if(data.messages.add_name != undefined){
								$('.errorName_add').show().text(data.messages.add_name[0]);
							}
							if(data.messages.add_email != undefined){
								$('.errorEmail_add').show().text(data.messages.add_email[0]);
							}
							if(data.messages.add_password != undefined){
								$('.errorPassword').show().text(data.messages.add_password[0]);
							}
							if(data.messages.add_password_confirmation != undefined){
								$('.errorPassword_confirmation_add').show().text(data.messages.add_password_confirmation[0]);
							}
						}
						if(data.add_user == true){
							setTimeout(function(){$("#addModal").modal('hide')},500);
						    setTimeout(function() { window.location.href = "/dientudandung/admin/user/show";}, 1000);
						}
					}
				})
			}
		})
	});

	/*Show information*/
	$('#view_user').click(function(){
		event.preventDefault();
		$('#viewModal').modal('show');
		$('.table input:checkbox:checked').map(function(){
			var searchID=[];
			searchID.push($(this).val());
			id=searchID[0];
			$.ajax({
				url:'/dientudandung/admin/user/information',
				type:"GET",
				data:{"id":id},
				success:function(data){
					$("#view_titlename").text(data.info.name);
			        $("#view_username").text(data.info.name);
			        $("#view_userlevel").text(data.info.level);
			        $("#view_useremail").text(data.info.email);
			        var d = new Date();
						var my_date_format = function(input){
						  var d = new Date(Date.parse(input.replace(/-/g, "/")));

						  var month = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

						  var date = d.getDay().toString() + " " + month[d.getMonth().toString()] + ", " +    d.getFullYear().toString();
						  var time = d.toLocaleTimeString().toLowerCase().replace(/([\d]+:[\d]+):[\d]+(\s\w+)/g, "$1$2");
						  return (time + " " + date);

						};
					$("#view_usercreated").text(my_date_format(data.info.created_at));
				}
			})
		})
	});

	/*Edit User*/

	$('#edit_user').click(function(){
		event.preventDefault();
		if(checked==0){
			$('#viewuser_errorModal').modal('show');
		}
		if(checked==1){
			$(".table input:checkbox:checked").map(function(){
				var searchID=[];
				searchID.push($(this).val());
				id=searchID[0];

				$.ajax({
					url:'/dientudandung/admin/user/edit',
					type:"GET",
					data:{"id":id},
					success:function(result){
						$("#editModal").modal('show');

						$("#old_id").val(result.info.id);
						$("#old_name").val(result.info.name);
						$("#old_email").val(result.info.email);
						$("#old_level_user").val(result.info.level);
					}
				});

				$("#validate_edit_user").validate({
					rules:{
						old_password:{
							required:true
						},
						old_password_confirmation:{
							required:true
						}
					},
					submitHandler:function(){
						$.ajaxSetup({
				   		headers: {
				        	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						    }
						});

						$.ajax({
							url:'/dientudandung/admin/user/edit',
							type:'POST',
							data:{
								'old_id' : $('#old_id').val(),
								'name' : $('#old_name').val(),
								'email' : $('#old_email').val(),
								'level' : $('#old_level_user').val(),
								'password':$('#old_password').val(),
								'password_confirmation':$('#old_password_confirmation').val()
							},
							success:function(data){
								if(data.error_edit==true){
									if(data.messages.email!=undefined){
										$(".errorEmail").show().text(data.messages.email[0]);
									}
									if(data.messages.password!=undefined){
										$(".errorPassword").show().text(data.messages.password[0]);
									}
									if(data.messages,password_confirmation!=undefined){
										$(".errorPassword_confirmation").show().text(data.messages.password_confirmation[0]);
									}

								}
								if(data.edit_user==true){
									setTimeout(function(){$('#editModal').modal('hide');},500);
									setTimeout(function(){window.location.href="/dientudandung/admin/user/show";},1000);
								}
							}
						})
					}
				})
			})
		}
	})

	/*Delete*/
	$('#delete_user').click(function(event){
		event.preventDefault();
		if(checked==0){
			$('#viewuser_errorModal').modal('show');
		}
		if(checked==1){
			$(".table input:checkbox:checked").map(function(){
	    	var searchID = [];
				searchID.push($(this).val());
				id=searchID[0];
				$('#deleteModal').modal('show');
				$('#deleteModal').find('#confirmdelete').on('click',function(){
					$.ajaxSetup({
					    headers: {
					        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					    }
					});
					$.ajax({
						url:'/dientudandung/admin/user/delete',
						type:"POST",
						data:{id:id},
						success:function(){
							for(var i=0; i<id.length;i++){
								$('tr#'+id+'').fadeOut(1000);
							}
							setTimeout(function(){$('#deleteModal').modal('hide');},500)
							setTimeout(function(){window.location.href="/dientudandung/admin/user/show";},1000);
						}
					})
				})
			})
		}
	})