
$('#view_lienhe').fadeOut(2000);
$('#edit_lienhe').fadeOut(2000);
$('#delete_lienhe').fadeOut(2000);


var checkBoxes=$('input[type=checkbox]');
checked=0;

$('.table tr').click(function(event){
	checked=1;
	$('#view_lienhe').fadeIn(1000);
	$('#edit_lienhe').fadeIn(1000);
	$('#delete_lienhe').fadeIn(1000);

	if(event.target.type!=='checkbox'){
		$(':checkbox',this).trigger('click');
	}
	$('.table tr').on('click','input[type=checkbox]',function(){
		checkBoxes.prop('checked',false);
		$(this).prop('checked',true);
	})
	$(this).addClass("selected").siblings().removeClass("selected");

})


/*Function use ckeditor and ckfinder*/
function ckeditor(name, config, toolbar){

	config = {};
	config.entities_latin = false;
	config.filebrowserBrowseUrl ='/giadungvanphong/public/editor/ckfinder/ckfinder.html';
	config.filebrowserImageBrowseUrl = '/giadungvanphong/public/editor/ckfinder/ckfinder.html';
	config.extraPlugins = 'youtube';

	if(toolbar == 'standard'){
		config.toolbarGroups = [
		{ name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
		{ name: 'forms', groups: [ 'forms' ] },
		{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
		{ name: 'links', groups: [ 'links' ] },
		'/',
		{ name: 'insert', groups: [ 'insert' ] },
		{ name: 'styles', groups: [ 'styles' ] },
		{ name: 'colors', groups: [ 'colors' ] },
		'/',
		{ name: 'tools', groups: [ 'tools' ] },
		{ name: 'others', groups: [ 'others' ] },
		{ name: 'about', groups: [ 'about' ] }
	];

	config.removeButtons = 'Save,NewPage,Print,Templates,Cut,Copy,Paste,PasteText,PasteFromWord,Find,Replace,Scayt,Subscript,Superscript,CopyFormatting,RemoveFormat,Outdent,Indent,CreateDiv,BidiLtr,BidiRtl,Language,Anchor,Unlink,Maximize,ShowBlocks,About';
	}if(toolbar =='basic'){
		config.toolbarGroups = [
			{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
			{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
			{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
			{ name: 'links', groups: [ 'links' ] },
			{ name: 'styles', groups: [ 'styles' ] },
			{ name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
			{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
			{ name: 'forms', groups: [ 'forms' ] },
			'/',
			{ name: 'insert', groups: [ 'insert' ] },
			'/',
			{ name: 'colors', groups: [ 'colors' ] },
			{ name: 'tools', groups: [ 'tools' ] },
			{ name: 'others', groups: [ 'others' ] },
			{ name: 'about', groups: [ 'about' ] }
		];

		config.removeButtons = 'Source,Save,NewPage,Preview,Print,Templates,Cut,Copy,Paste,PasteText,Find,Replace,SelectAll,Scayt,Form,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Strike,Subscript,Superscript,CopyFormatting,RemoveFormat,BulletedList,NumberedList,Outdent,Blockquote,Indent,CreateDiv,JustifyRight,BidiLtr,BidiRtl,Language,Unlink,Anchor,Flash,Image,Table,Smiley,SpecialChar,PageBreak,Iframe,TextColor,BGColor,ShowBlocks,About,Maximize,PasteFromWord,Checkbox,HorizontalRule';


	}if(toolbar == 'full'){
		config.toolbarGroups = [
			{ name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
			{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
			{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
			{ name: 'forms', groups: [ 'forms' ] },
			'/',
			{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
			{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
			{ name: 'links', groups: [ 'links' ] },
			{ name: 'insert', groups: [ 'insert' ] },
			'/',
			{ name: 'styles', groups: [ 'styles' ] },
			{ name: 'colors', groups: [ 'colors' ] },
			{ name: 'tools', groups: [ 'tools' ] },
			{ name: 'others', groups: [ 'others' ] },
			{ name: 'about', groups: [ 'about' ] }
		];
	}

	return  CKEDITOR.replace(name, config, toolbar);
}

if($('#add_tittle_lienhe').length){
	ckeditor("add_introduce_lienhe","config","standard")
}
if($('#edit_tittle_lienhe').length){
	ckeditor("edit_introduce_lienhe","config","standard")
}


$.fn.modal.Constructor.prototype.enforceFocus = function () {
    modal_this = this
    $(document).on('focusin.modal', function (e) {
        if (modal_this.$element[0] !== e.target && !modal_this.$element.has(e.target).length
        // add whatever conditions you need here:
        &&
        !$(e.target.parentNode).hasClass('cke_dialog_ui_input_select') && !$(e.target.parentNode).hasClass('cke_dialog_ui_input_text')) {
            modal_this.$element.focus()
        }
    })
};
for (instance in CKEDITOR.instances) {
    CKEDITOR.instances[instance].updateElement();
};

/*Add*/
$('#add_lienhe').click(function(){
	$("#addlienheModal").modal('show');
	$("#validate_add_lienhe").validate({
		rules:{
			add_sdt:{
				required:true
			},
			add_diachi:{
				required:true
			}
		},
		messages:{
			add_sdt:{
				required:"Mời nhập số điện thoại"
			},
			add_diachi:{
				required:"Mời nhập địa chỉ"
			}
		},

		submitHandler:function(){
			$.ajaxSetup({
			    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
			});
			$.ajax({
				url:'/giadungvanphong/admin/lienhe/add',
				type:"POST",
				data:{
					'add_sdt':$('#add_sdt').val(),
					'add_diachi':$('#add_diachi').val()
				},
				success:function(data){
					//console.log(data);
					if(data.error_add_lienhe==true){
						$('.error').hide();
						if(data.messages.add_sdt!=undefined){
							$('.error_sdt_lienhe').show().text(data.messages.add_sdt[0]);
						}
						if(data.messages.add_diachi!==undefined){
							$('.error_diachi_lienhe').show().text(data.messages.add_diachi[0]);
						}
					}
					if(data.add_lienhe==true){
						$('#lienhe_table').load('/giadungvanphong/admin/lienhe/show #lienhe_table');
						setTimeout(function() { $('#addlienheModal').modal('hide');}, 200);
						setTimeout(function(){ $("#add_lienhe_success").modal('show');},1000);
						setTimeout(function(){ $("#add_lienhe_success").modal('hide'); },3000);
						setTimeout(function() { window.location.href = "/giadungvanphong/admin/lienhe/show";}, 3200);
					}
				}
			})
		}
	})
})

/*Edit*/
$("#edit_lienhe").click(function(){
	$('.table input:checkbox:checked').map(function(){
		var searchID=[];
		searchID.push($(this).val());
		id=searchID[0];
		$("#editlienheModal").modal('show');

		$.ajax({
			url:'/giadungvanphong/admin/lienhe/edit',
			type:"GET",
			data:{"id":id},
			success:function(result){
				$("#edit_id_lienhe").val(result.id);
				$('#edit_sdt').val(result.sdt);
				$('#edit_diachi').val(result.diachi);

				$("#validate_edit_lienhe").validate({
					rules:{
						edit_sdt:{
							required:true
						},
						edit_diachi:{
							required:true
						}
					},
					messages:{
						edit_sdt:{
							required:"Mời nhập số điện thoại"
						},
						edit_diachi:{
							required:"Mời nhập địa chỉ"
						}
					},

					submitHandler:function(){
						$.ajaxSetup({
						    headers: {
						        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						    }
						});

						$.ajax({
							url:'/giadungvanphong/admin/lienhe/edit',
							type:"POST",
							data:{
								'edit_id_lienhe':$('#edit_id_lienhe').val(),
								'edit_sdt':$('#edit_sdt').val(),
								'edit_diachi':$('#edit_diachi').val()
							},
							success:function(data){
								if(data.error_edit_lienhe==true){
									$('.error').hide();
									if(data.messages.edit_sdt!==undefined){
										$(".error_sdt_lienhe_edit").show().text(data.messages.edit_sdt[0]);
									}
									if(data.messages.edit_diachi!==undefined){
										$('.error_diachi_lienhe_edit').show().text(data.messages.edit_diachi[0]);
									}
								}
								if(data.edit_lienhe==true){
									$('#lienhe_table').load('/giadungvanphong/admin/lienhe/show #lienhe_table');
									setTimeout(function() { $('#editlienheModal').modal('hide');}, 200);
									setTimeout(function(){ $("#edit_lienhe_success").modal('show');},1000);
									setTimeout(function(){ $("#edit_lienhe_success").modal('hide'); },3000);
									setTimeout(function() { window.location.href = "/giadungvanphong/admin/lienhe/show";}, 3200);
								}
							}
						})
					}
				})
			}
		})
	})
})

/*Delete*/

$("#delete_lienhe").click(function(){
	$('.table input:checkbox:checked').map(function(){
		var searchID=[];
		searchID.push($(this).val());
		id=searchID[0];

		$("#deletelienheModal").modal('show');
		$('#deletelienheModal').find('#confirmdelete').on('click',function(){
			$.ajaxSetup({
			    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
			});
			$.ajax({
				url:'/giadungvanphong/admin/lienhe/delete',
				type:'POST',
				data:{"id":id},
				success:function(data){
					for(var i=0;i<id.length;i++){
						$('tr#'+id+'').fadeOut(1000);
					}
					setTimeout(function(){$('#deletelienheModal').modal('hide');},500)
					setTimeout(function(){window.location.href="/giadungvanphong/admin/lienhe/show";},1000);
				}
			})
		})

	})
})
