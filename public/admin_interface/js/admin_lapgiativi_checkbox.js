
$('#view_lapgiativi').fadeOut(2000);
$('#edit_lapgiativi').fadeOut(2000);
$('#delete_lapgiativi').fadeOut(2000);


var checkBoxes=$('input[type=checkbox]');
checked=0;

$('.table tr').click(function(event){
	checked=1;
	$('#view_lapgiativi').fadeIn(1000);
	$('#edit_lapgiativi').fadeIn(1000);
	$('#delete_lapgiativi').fadeIn(1000);

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

if($('#add_tittle_lapgiativi').length){
	ckeditor("add_introduce_lapgiativi","config","standard")
}
if($('#edit_tittle_lapgiativi').length){
	ckeditor("edit_introduce_lapgiativi","config","standard")
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

/*add*/

$('#add_lapgiativi').click(function(){
	$('#addlapgiativiModal').modal('show');

	$('#validate_add_lapgiativi').validate({
		rules:{
			add_tittle_lapgiativi:{
				required:true
			},
			add_cost_lapgiativi:{
				required:true
			},
			add_introduce_lapgiativi:{
				required:true
			}
		},
		messages:{
			add_tittle_lapgiativi:{
				required:"Mời nhập tiêu đề"
			},
			add_cost_lapgiativi:{
				required:"Mời nhập gía"
			},
			add_introduce_lapgiativi:{
				required:"Mời nhập thông tin"
			}
		},

		submitHandler:function(){
			$.ajaxSetup({
			    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
			});
			$.ajax({
				url:'/dientudandung/admin/lapgiativi/add',
				type:"POST",
				asnyc:true,
				dataType:"json",
				contentType:false,
				data:new FormData($("#validate_add_lapgiativi")[0]),
				processData:false,
				beforeSend:function(){
					$("#loading_add_lapgiativi").show();
				},
				complete:function(){
					$("#loading_add_lapgiativi").hide();
				},
				success:function(data){
					console.log(data);
					if(data.error_add_lapgiativi==true){
						$('.error').hide();
						if(data.messages.add_tittle_lapgiativi!=undefined){
							$('.errortittle_add_lapgiativi').show().text(data.messages.add_tittle_lapgiativi[0]);
						}
					}
					if(data.add_lapgiativi==true){
						$('#lapgiativi_table').load('/dientudandung/admin/lapgiativi/show #lapgiativi_table');
						setTimeout(function() { $('#addlapgiativiModal').modal('hide');}, 200);
						setTimeout(function(){ $("#add_lapgiativi_success").modal('show');},1000);
						setTimeout(function(){ $("#add_lapgiativi_success").modal('hide'); },3000);
						setTimeout(function() { window.location.href = "/dientudandung/admin/lapgiativi/show";}, 3200);
					}
				}
			})
		}
	})
})

/*View*/
$('#view_lapgiativi').click(function(){
	$(".table input:checkbox:checked").map(function(){
		var seachID=[];
		seachID.push($(this).val());
		id=seachID[0];
		$('#viewlapgiativiModal').modal('show');

		$.ajax({
			url:'/dientudandung/admin/lapgiativi/information',
			type:'GET',
			data:{"id":id},
			success:function(result){
				//console.log(result[0]);
				$('#view_tittle_lapgiativi').text(result[0].tittle);
				$('#view_cost_lapgiativi').text(result[0].cost);
				$('#view_introduce_lapgiativi').html(result[0].introduce);
				var d = new Date();
					var my_date_format = function(input){
					  var d = new Date(Date.parse(input.replace(/-/g, "/")));

					  var month = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

					  var date = d.getDay().toString() + " " + month[d.getMonth().toString()] + ", " +    d.getFullYear().toString();
					  var time = d.toLocaleTimeString().toLowerCase().replace(/([\d]+:[\d]+):[\d]+(\s\w+)/g, "$1$2");
					  return ( date);

					};
				$("#view_created").text(my_date_format(result[0].created_at));
			}
		})
	})
})

/*Edit*/
$('#edit_lapgiativi').click(function(){

	$('.table input:checkbox:checked').map(function(){
		var searchID=[];
		searchID.push($(this).val());
		id=searchID[0];
		$('#editlapgiativiModal').modal('show');
		$.ajax({
			url:'/dientudandung/admin/lapgiativi/edit',
			type:"GET",
			data:{"id":id},
			success:function(result){
				//console.log(result);
				$("#edit_lapgiativi_id").val(result.id);
				$("#edit_tittle_lapgiativi").val(result.tittle);
				$("#edit_cost_lapgiativi").val(result.cost);
				CKEDITOR.instances['edit_introduce_lapgiativi'].setData(result.introduce);

				$('#validate_edit_lapgiativi').validate({
					rules:{
						edit_tittle_lapgiativi:{
							required:true
						},
						edit_cost_lapgiativi:{
							required:true
						},
						edit_introduce_lapgiativi:{
							required:true
						}
					},
					messages:{
						edit_tittle_lapgiativi:{
							required:"Mời nhập tiêu đề"
						},
						edit_cost_lapgiativi:{
							required:"Mời nhập gía"
						},
						edit_introduce_lapgiativi:{
							required:"Mời nhập thông tin"
						}
					},

					submitHandler:function(){
						$.ajaxSetup({
						    headers: {
						        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						    }
						});
						$.ajax({
							url:'/dientudandung/admin/lapgiativi/edit',
							type:"POST",
							asnyc:true,
							dataType:"json",
							contentType:false,
							data:new FormData($("#validate_edit_lapgiativi")[0]),
							processData:false,
							beforeSend:function(){
								$("#loading_edit_lapgiativi").show();
							},
							complete:function(){
								$("#loading_edit_lapgiativi").hide();
							},
							success:function(data){
								console.log(data);
								if(data.error_edit_lapgiativi==true){
									$('.error').hide();
									if(data.messages.add_tittle_lapgiativi!=undefined){
										$('.errortittle_edit_lapgiativi').show().text(data.messages.edit_tittle_lapgiativi[0]);
									}
								}
								if(data.add_lapgiativi==true){
									$('#lapgiativi_table').load('/dientudandung/admin/lapgiativi/show #lapgiativi_table');
									setTimeout(function() { $('#addlapgiativiModal').modal('hide');}, 200);
									setTimeout(function(){ $("#add_lapgiativi_success").modal('show');},1000);
									setTimeout(function(){ $("#add_lapgiativi_success").modal('hide'); },3000);
									setTimeout(function() { window.location.href = "/dientudandung/admin/lapgiativi/show";}, 3200);
								}
							}
						})
					}
				})
			}
		})
	})
})