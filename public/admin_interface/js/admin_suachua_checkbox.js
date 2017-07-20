
$('#view_suachua').fadeOut(2000);
$('#edit_suachua').fadeOut(2000);
$('#delete_suachua').fadeOut(2000);


var checkBoxes=$('input[type=checkbox]');
checked=0;

$('.table tr').click(function(event){
	checked=1;
	$('#view_suachua').fadeIn(1000);
	$('#edit_suachua').fadeIn(1000);
	$('#delete_suachua').fadeIn(1000);

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

if($('#add_tittle_suachua').length){
	ckeditor("add_introduce_suachua","config","standard")
}
if($('#edit_tittle_suachua').length){
	ckeditor("edit_introduce_suachua","config","standard")
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
}

/*Add san pham sua chua*/

$('#add_suachua').click(function(){
	$("#addsuachuaModal").modal('show');
	$("#validate_add_suachua").validate({
		ignore: [],/*ignore hidden field*/
		rules:{
			add_tittle_suachua:{
				required:true
			},
			add_type_suachua:{
				required:true
			},
			add_cost_suachua:{
				required:true
			},
			add_introduce_suachua:{
				required:true
			}
		},
		messages:{
			add_tittle_suachua:{
				required:"Mời nhập tiêu đề"
			},
			add_type_suachua:{
				required:"Mời nhập loại sản phẩm sửa chữa"
			},
			add_cost_suachua:{
				required:"Mời nhập gía"
			},
			add_introduce_suachua:{
				required:"Nhập mô tả"
			}
		},
		submitHandler: function(){
			$.ajaxSetup({
			    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
			});
			$.ajax({
				url:'/dientudandung/admin/suachua/add',
				type:"POST",
				asnyc:true,
				dataType:"json",
				contentType:false,
				data:new FormData($("#validate_add_suachua")[0]),
				processData:false,
				beforeSend:function(){
					$("#loading_add_suachua").show();
				},
				complete:function(){
					$("#loading_add_suachua").hide();
				},
				success:function(data){
					console.log(data);
					if(data.error_add_suachua==true){
						$('.error').hide();
						if(data.messages.add_tittle_suachua!=undefined){
							$('.errortittle_add_suachua').show().text(data.messages.add_tittle_suachua[0]);
						}
					}
					if(data.add_suachua==true){
						$('#suachua_table').load('/dientudandung/admin/suachua/show #suachua_table');
						setTimeout(function() { $('#addsuachuaModal').modal('hide');}, 200);
						setTimeout(function(){ $("#add_suachua_success").modal('show');},1000);
						setTimeout(function(){ $("#add_suachua_success").modal('hide'); },3000);
						setTimeout(function() { window.location.href = "/dientudandung/admin/suachua/show";}, 3200);
					}
				}
			})
		}
	})
});


/*View information*/

$("#view_suachua").click(function(){
	$("#viewsuachuaModal").modal('show');

	$(".table input:checkbox:checked").map(function(){
		var searchId=[];
		searchId.push($(this).val());
		id=searchId[0];
		console.log(id);

		$.ajax({
			url:'/dientudandung/admin/suachua/information',
			type:"GET",
			data:{"id":id},
			success:function(result){
				//console.log(result);

				$("#view_header_suachua").text(result.tittle);
				$("#view_tittle_suachua").text(result.tittle);
				$("#view_cost_suachua").text(result.cost);
				$("#view_type_suachua").text(result.type);
				$("#view_introduce_suachua").html(result.introduce);
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
});

/*Edit sua chua*/

$("#edit_suachua").click(function(){

	$(".table input:checkbox:checked").map(function(){
		var searchId=[];
		searchId.push($(this).val());
		id=searchId[0];

		$.ajax({
			url:'/dientudandung/admin/suachua/edit',
			type:"GET",
			data:{"id":id},
			success:function(result){
				$("#editsuachuaModal").modal('show');
				console.log(result);
				$("#edit_suachua_id").val(result.id);
				$("#edit_tittle_suachua").val(result.tittle);
				$("#edit_type_suachua").val(result.type);
				$("#edit_cost_suachua").val(result.cost);
				CKEDITOR.instances['edit_introduce_suachua'].setData(result.introduce);

				$("#validate_edit_suachua").validate({
					ignore: [],/*ignore hidden field*/
					rules:{
						edit_tittle_suachua:{
							required:true
						},
						edit_type_suachua:{
							required:true
						},
						edit_cost_suachua:{
							required:true
						},
						edit_introduce_suachua:{
							required:true
						}
					},
					messages:{
						edit_tittle_suachua:{
							required:"Mời nhập tiêu đề"
						},
						edit_type_suachua:{
							required:"Mời nhập loại sản phẩm sửa chữa"
						},
						edit_cost_suachua:{
							required:"Mời nhập gía"
						},
						edit_introduce_suachua:{
							required:"Nhập mô tả"
						}
					},
					submitHandler: function(){
						$.ajaxSetup({
						    headers: {
						        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						    }
						});
						$.ajax({
							url:'/dientudandung/admin/suachua/edit',
							type:'POST',
							asnyc:true,
							dataType:"json",
							contentType:false,
							data:new FormData($("#validate_edit_suachua")[0]),
							processData:false,
							beforeSend:function(){
								$("#loading_edit_suachua").show();
							},
							complete:function(){
								$("#loading_edit_suachua").hide();
							},
							success:function(data){
								console.log(data);
								if(data.error_edit_suachua==true){
									$('.error').hide();
									if(data.messages.edit_tittle_suachua!=undefined){
										$('.errortittle_edit_suachua').show().text(data.messages.edit_tittle_suachua[0]);
									}
								}
								if(data.edit_suachua==true){
									$('#suachua_table').load('/dientudandung/admin/suachua/show #suachua_table');
									setTimeout(function() { $('#editsuachuaModal').modal('hide');}, 200);
									setTimeout(function(){ $("#edit_suachua_success").modal('show');},1000);
									setTimeout(function(){ $("#edit_suachua_success").modal('hide'); },3000);
									setTimeout(function() { window.location.href = "/dientudandung/admin/suachua/show";}, 3200);
								}
							}
						})
					}
				})
			}
		})
	})
})

$("#delete_suachua").click(function(){

	$(".table input:checkbox:checked").map(function(){
		var searchId=[];
		searchId.push($(this).val());
		id=searchId[0];
		$("#deletesuachuaModal").modal('show');
		$("#deletesuachuaModal").find('#confirmdelete').on('click',function(){
			$.ajaxSetup({
			    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
			});
			$.ajax({
				url:'/dientudandung/admin/suachua/delete',
				type:'POST',
				data:{"id":id},
				success:function(data){
					for(var i=0;i<id.length;i++){
						$('tr#'+id+'').fadeOut(1000);
					}
					setTimeout(function(){$('#deletesuachuaModal').modal('hide');},500)
					setTimeout(function(){window.location.href="/dientudandung/admin/suachua/show";},1000);
				}
			})
		})
	})

});

