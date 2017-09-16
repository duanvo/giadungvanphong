
$('#view_muabandocu').fadeOut(2000);
$('#edit_muabandocu').fadeOut(2000);
$('#delete_muabandocu').fadeOut(2000);


var checkBoxes=$('input[type=checkbox]');
checked=0;

$('.table tr').click(function(event){
	checked=1;
	$('#view_muabandocu').fadeIn(1000);
	$('#edit_muabandocu').fadeIn(1000);
	$('#delete_muabandocu').fadeIn(1000);

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
	config.filebrowserBrowseUrl ='/studyenglishtoday/public/editor/ckfinder/ckfinder.html';
	config.filebrowserImageBrowseUrl = '/studyenglishtoday/public/editor/ckfinder/ckfinder.html';
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

if($('#add_tittle_muabandocu').length){
	ckeditor("add_introduce_muabandocu","config","standard")
}
if($('#edit_tittle_muabandocu').length){
	ckeditor("edit_introduce_muabandocu","config","standard")
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


/*Add mua ban do cu*/

$('#add_muabandocu').click(function(){
	$('#addmuabandocuModal').modal('show');

	$("#validate_add_muabandocu").validate({
		ignore:[],
		rules:{
			add_tittle_muabandocu:{
				required:true
			},
			add_type_muabandocu:{
				required:true
			},
			add_cost_muabandocu:{
				required:true
			},
			add_introduce_muabandocu:{
				required:true
			}
		},
		messages:{
			add_tittle_muabandocu:{
				required:"Mời nhập tiêu đề"
			},
			add_type_muabandocu:{
				required:"Mời chọn kiểu"
			},
			add_cost_muabandocu:{
				required:"Mời nhập gía"
			},
			add_introduce_muabandocu:{
				required:"Mời nhập lời giới thiệu"
			}
		},

		submitHandler:function(){
			$.ajaxSetup({
			    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
			});
			$.ajax({
				url:'/dientudandung/admin/muabandocu/add',
				type:"POST",
				asnyc:true,
				dataType:"json",
				contentType:false,
				data:new FormData($("#validate_add_muabandocu")[0]),
				processData:false,
				beforeSend:function(){
					$("#loading_add_muabandocu").show();
				},
				complete:function(){
					$("#loading_add_muabandocu").hide();
				},
				success:function(data){
					if(data.error_add_muabandocu==true){
						$('.error').hide();
						if(data.messages.add_tittle_muabandocu!=undefined){
							$('.errortittle_add_muabandocu').show().text(data.messages.add_tittle_muabandocu[0]);
						}
					}
					if(data.add_muabandocu==true){
						$('#muabandocu_table').load('/dientudandung/admin/muabandocu/show #muabandocu_table');
						setTimeout(function() { $('#addmuabandocuModal').modal('hide');}, 200);
						setTimeout(function(){ $("#add_muabandocu_success").modal('show');},1000);
						setTimeout(function(){ $("#add_muabandocu_success").modal('hide'); },3000);
						setTimeout(function() { window.location.href = "/dientudandung/admin/muabandocu/show";}, 3200);
					}
				}
			})
		}
	})
})

/*View information*/

$("#view_muabandocu").click(function(){

	$('.table input:checkbox:checked').map(function(){
		var searchID=[];
		searchID.push($(this).val());
		id=searchID[0];
		//console.log(id);
		$.ajax({
			url:'/dientudandung/admin/muabandocu/information',
			type:"GET",
			data:{"id":id},
			success:function(result){
				$("#viewmuabandocuModal").modal('show');

				$("#view_header_muabandocu").text(result.tittle);
				$("#view_tittle_muabandocu").text(result.tittle);
				$("#view_cost_muabandocu").text(result.cost);
				$("#view_type_muabandocu").text(result.type);
				$("#view_image_muabandocu").text(result.image);
				$("#view_introduce_muabandocu").html(result.introduce);
				var d = new Date();
					var my_date_format = function(input){
					  var d = new Date(Date.parse(input.replace(/-/g, "/")));

					  var month = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

					  var date = d.getDay().toString() + " " + month[d.getMonth().toString()] + ", " +    d.getFullYear().toString();
					  var time = d.toLocaleTimeString().toLowerCase().replace(/([\d]+:[\d]+):[\d]+(\s\w+)/g, "$1$2");
					  return ( date);

					};
				$("#view_created").text(my_date_format(result.created_at));
			}
		})
	})
})

/*Edit*/

$("#edit_muabandocu").click(function(){
	$(".table input:checkbox:checked").map(function(){
		var searchID=[];
		searchID.push($(this).val());
		id=searchID[0];
		$("#editmuabandocuModal").modal('show');
		$.ajax({
			url:'/dientudandung/admin/muabandocu/edit',
			type:"GET",
			data:{"id":id},
			success:function(result){
				//console.log(result);
				$("#edit_muabandocu_id").val(result.id);
				$("#edit_tittle_muabandocu").val(result.tittle);
				$("#edit_type_muabandocu").val(result.type);
				$("#edit_cost_muabandocu").val(result.cost);
				CKEDITOR.instances['edit_introduce_muabandocu'].setData(result.introduce);

				$("#validate_edit_muabandocu").validate({
					ignore:[],
					rules:{
						edit_tittle_muabandocu:{
							required:true
						},
						edit_cost_muabandocu:{
							required:true
						},
						edit_type_muabandocu:{
							required:true
						},
						edit_introduce_muabandocu:{
							required:true
						}
					},
					messages:{
						edit_tittle_muabandocu:{
							required:"Mời nhập tiêu đề"
						},
						edit_cost_muabandocu:{
							required:"Mời nhập gía"
						},
						edit_type_muabandocu:{
							required:"Mời nhập loại"
						},
						edit_introduce_muabandocu:{
							required:"Mời nhập miêu tả"
						}
					},
					submitHandler:function(){
						$.ajaxSetup({
						    headers: {
						        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						    }
						});
						$.ajax({
							url:'/dientudandung/admin/muabandocu/edit',
							type:"POST",
							asnyc:true,
							dataType:"json",
							contentType:false,
							data:new FormData($("#validate_edit_muabandocu")[0]),
							processData:false,
							beforeSend:function(){
								$("#loading_edit_muabandocu").show();
							},
							complete:function(){
								$("#loading_edit_muabandocu").hide();
							},
							success:function(data){
								if(data.error_edit_muabandocu==true){
									$('.error').hide();
									if(data.messages.edit_tittle_muabandocu!==undefined){
										$('.errortittle_edit_muabandocu').text(data.messages.edit_tittle_muabandocu);
									}
								}
								if(data.edit_muabandocu==true){
									$('#muabandocu_table').load('/dientudandung/admin/muabandocu/show #muabandocu_table');
									setTimeout(function() { $('#editmuabandocuModal').modal('hide');}, 200);
									setTimeout(function(){ $("#edit_muabandocu_success").modal('show');},1000);
									setTimeout(function(){ $("#edit_muabandocu_success").modal('hide'); },3000);
									setTimeout(function() { window.location.href = "/dientudandung/admin/muabandocu/show";}, 3200);
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

$("#delete_muabandocu").click(function(){
	$('.table input:checkbox:checked').map(function(){
		var searchID=[];
		searchID.push($(this).val());
		id=searchID[0];
		$("#deletemuabandocuModal").modal('show');
		$("#deletemuabandocuModal").find('#confirmdelete').on('click',function(){
			$.ajaxSetup({
			    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
			});
			$.ajax({
				url:'/dientudandung/admin/muabandocu/delete',
				type:"POST",
				data:{"id":id},
				success:function(data){
					for(var i=0;i<id.length;i++){
						$('tr#'+id+'').fadeOut(1000);
					}
					setTimeout(function(){$('#deletemuabandocuModal').modal('hide');},500)
					setTimeout(function(){window.location.href="/dientudandung/admin/muabandocu/show";},1000);
				}
			})
		})
	})
})