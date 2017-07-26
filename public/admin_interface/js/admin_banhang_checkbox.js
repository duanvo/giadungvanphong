$("#view_banhang").fadeOut(2000);
$("#edit_banhang").fadeOut(2000);
$("#delete_banhang").fadeOut(2000);


var checkBoxes=$('input[type=checkbox]');
var checked=0;

$('.table tr').click(function(event){
	checked=1;
	$('#view_banhang').fadeIn(1000);
	$('#edit_banhang').fadeIn(1000);
	$('#delete_banhang').fadeIn(1000);

	if(event.target.type!=='checkbox'){
		$(':checkbox',this).trigger('click');
	}
	$('.table tr').on('click','input[type=checkbox]',function(){
		checkBoxes.prop('checked',false);
		$(this).prop('checked',true);
	});
	$(this).addClass("selected").siblings().removeClass("selected");
});

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

if($('#add_tittle').length){
	ckeditor("add_introduce","config","standard")
}

if($('#edit_tittle_sanpham').length){
	ckeditor("edit_introduce_sanpham","config",'standard');
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
/*Add San Pham */

$('#add_banhang').click(function(){
	$('#addModal').modal('show');

	/*Upload image*/

	if(window.File && window.FileList && window.FileReader)
    {

        var filesInput = document.getElementById("files");
        filesInput.addEventListener("change", function(event){
            var files = event.target.files; //FileList object
            var output = document.getElementById("result");
            for(var i = 0; i< files.length; i++)
            {
                var file = files[i];
                //Only pics
                if(!file.type.match('image'))
                  continue;
                var picReader = new FileReader();
                picReader.addEventListener("load",function(event){
                    var picFile = event.target;
                    var div = document.createElement("div");
                    div.innerHTML = "<img class='thumbnail' src='" + picFile.result + "'" +
                            "title='" + picFile.name + "'/>";
                    output.insertBefore(div,null);
                });
                 //Read the image
                picReader.readAsDataURL(file);
            }
        });
    }
    else
    {
        console.log("Your browser does not support File API");
    }
    /*Validate*/
	$('#validate_add_banhang').validate({
		ignore: [],/*ignore hidden field*/
		rules:{
			add_tittle:{
				required:true
			},
			add_type_banhang:{
				required:true
			},
			add_cost:{
				required:true
			},
            add_introduce: {
            	required  :true
            }
        },
        messages:{
			add_tittle:{
				required:"Mời nhập tiêu đề"
			},
			add_type_banhang:{
				required:"Mời nhập loại sản phẩm"
			},
			add_cost:{
				required:"Mời nhập gía"
			},
			add_introduce:{
				required:"Nhập mô tả"
			}
		},
		submitHandler: function () {
			//Check File API support
			$.ajaxSetup({
			    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
			});

			$.ajax({
				url:'/dientudandung/admin/banhang/add',
				type:"POST",
				asnyc:true,
				dataType:"json",
				contentType:false,
				data:new FormData($("#validate_add_banhang")[0]),
				processData:false,
				beforeSend:function(){
					$("#loading_add_banhang").show();
				},
				complete:function(){
					$("#loading_add_banhang").hide();
				},
				success:function(data){
					console.log(data);
					if(data.error_add_banhang==true){
						$('.error').hide();
						if(data.messages.add_tittle!=undefined){
							$('.errortittle_add').show().text(data.messages.add_tittle[0]);
						}
					}
					if(data.add_banhang==true){
						$('#banhang_table').load('/dientudandung/admin/banhang/show #banhang_table');
						setTimeout(function() { $('#addModal').modal('hide');}, 200);
						setTimeout(function(){ $("#add_banhang_success").modal('show');},1000);
						setTimeout(function(){ $("#add_banhang_success").modal('hide'); },3000);
						setTimeout(function() { window.location.href = "/dientudandung/admin/banhang/show";}, 3200);
					}
				}

			})
		}
	})
})


/*View Product*/


$('#view_banhang').click(function(){
	$("#viewsanphamModal").modal('show');
	$(".table input:checkbox:checked").map(function(){
		var searchID=[];
		searchID.push($(this).val());
		id=searchID[0];

		$.ajax({
			url:'/dientudandung/admin/banhang/information',
			type:'GET',
			data:{"id":id},
			success:function(result){
				//console.log(result);

				$('#view_header_sanpham').text(result.info.tittle);
				$('#view_type_sanpham').text(result.info.type);
				$('#view_tittle_sanpham').text(result.info.tittle);
				$('#view_cost_sanpham').text(result.info.cost);

				var path_img = "http://localhost/dientudandung/"+result.info_image[0];
				$("#view_image_sanpham").attr("src", path_img);

				$('#view_introduce_sanpham').html(result.info.introduce);
				var d = new Date();
					var my_date_format = function(input){
					  var d = new Date(Date.parse(input.replace(/-/g, "/")));

					  var month = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

					  var date = d.getDay().toString() + " " + month[d.getMonth().toString()] + ", " +    d.getFullYear().toString();
					  var time = d.toLocaleTimeString().toLowerCase().replace(/([\d]+:[\d]+):[\d]+(\s\w+)/g, "$1$2");
					  return ( date);

					};
				$("#view_created").text(my_date_format(result.info.created_at));
			}
		})
	})

});

/*Edit san pham*/

$('#edit_banhang').click(function(){
	event.preventDefault();
	if(checked==1){
		$(".table input:checkbox:checked").map(function(){
			var searchID=[];
			searchID.push($(this).val());
			id=searchID[0];

			$.ajax({
				url:'/dientudandung/admin/banhang/edit',
				type:'GET',
				data:{"id":id},
				success:function(result){
					console.log(result);
					$('#editsanphamModal').modal('show');
					$("#old_id_banhang").val(id);
					$("#edit_tittle_sanpham").val(result.info_edit.tittle);
					$("#edit_type_sanpham").val(result.info_edit.type);
					$("#edit_cost_sanpham").val(result.info_edit.cost);
					CKEDITOR.instances['edit_introduce_sanpham'].setData(result.info_edit.introduce);
				}
			});

			$("#validate_edit_banhang").validate({
				ignore:[],
				rules:{
					edit_type_sanpham:{required:true},
					edit_cost_sanpham:{required:true},
					edit_introduce_sanpham:{required:true}
				},
				messages:{
					edit_type_sanpham:{
						required:"Chọn loại sản phẩm"
					},
					edit_cost_sanpham:{
						required:"Mời nhập gía"
					},
					edit_introduce_sanpham:{
						required:"Nhập thông tin sản phẩm"
					}
				},

				submitHandler:function(){
					$.ajaxSetup({
					    headers: {
					        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					    }
					});
					$.ajax({
						url:'/dientudandung/admin/banhang/edit',
						type:"POST",
						asnyc:true,
						dataType:"json",
						contentType:false,
						data:new FormData($("#validate_edit_banhang")[0]),
						processData:false,

						beforeSend:function(){
							$("#loading_add_banhang").show();
						},
						complete:function(){
							$("#loading_add_banhang").hide();
						},
						success:function(data){
							if(data.edit_sanpham==true){
								$('#banhang_table').load('/dientudandung/admin/banhang/show #banhang_table');
								setTimeout(function() { $('#editsanphamModal').modal('hide');}, 200);
								setTimeout(function(){ $("#edit_banhang_success").modal('show');},1000);
								setTimeout(function(){ $("#edit_banhang_success").modal('hide'); },3000);
								setTimeout(function() { window.location.href = "/dientudandung/admin/banhang/show";}, 3200);
							}
						}
					})
				}
			})
		})
	}
})


$("#delete_banhang").click(function(){
	event.preventDefault();
	if(checked==1){
		$(".table input:checkbox:checked").map(function(){
			var searchID=[];
			searchID.push($(this).val());
			id=searchID[0];
			$("#deletesanphamModal").modal('show');
			$("#deletesanphamModal").find('#confirmdelete').on('click',function(){
				$.ajaxSetup({
				    headers: {
				        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				    }
				});
				$.ajax({
					url:'/dientudandung/admin/banhang/delete',
					type:"POST",
					data:{"id":id},
					success:function(){
						for(var i=0;i<id.length;i++){
							$('tr#'+id+'').fadeOut(1000);
						}
						setTimeout(function(){$('#deletesanphamModal').modal('hide');},500)
						setTimeout(function(){window.location.href="/dientudandung/admin/banhang/show";},1000);
					}
				})
			})
		})
	}

})
