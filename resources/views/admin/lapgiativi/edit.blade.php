
<!-- Modal edit lapgiativi-->

<div id="editlapgiativiModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="content modal_background">
            <div class="panel-title">
                <h3 class="modal_header" align="center">Edit lắp gía tivi</h3>
            </div>
            <div class="modal-body">
                <form action="" method="POST" class="form-horizontal" role="form" id="validate_edit_lapgiativi" enctype="multiple/form-data">

                    <!-- edit Name -->
                    <div class="form-group">
                        <label for="name" class="col-md-2 control-label">Edit tiêu đề</label>
                        <div class="col-md-9">
                        	<input type="text" name="edit_lapgiativi_id" id="edit_lapgiativi_id" class="hidden">
                            <input type="text" class="form-control" id="edit_tittle_lapgiativi" name="edit_tittle_lapgiativi" placeholder="Tên sản phẩm" autofocus>
                            <div class="has-error"><i><span class="help-block error errortittle_edit_lapgiativi"></span></i></div>
                        </div>
                    </div>

                    <!-- edit Cost -->
                    <div class="form-group">
                        <label for="cost" class="col-md-2 control-label">Edit Gía</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="edit_cost_lapgiativi" name="edit_cost_lapgiativi" placeholder="Gía sản phẩm">
                            <div class="has-error"><i><span class="help-block errorCost_edit"></span></i></div>
                        </div>
                    </div>

                    <!-- edit Images -->
                    <div class="form-group">
                        <label for="files" class="col-md-2 control-label">Edit ảnh</label>
                        <div class="col-md-9">
                            <input id="files" type="file" name="file_lapgiativi[]" multiple/>
                            <div id="result_lapgiativi" /></div>
                        </div>
                    </div>

                    <!-- edit Introduce -->
                    <div class="form-group">
                        <label for="introduce" class="col-md-2 control-label">Edit Thông tin</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="edit_introduce_lapgiativi" name="edit_introduce_lapgiativi" placeholder="Thông tin sản phẩm"></textarea>
                            <div class="has-error"><i><span class="help-block errorIntroduce_edit"></span></i></div>
                        </div>
                    </div>
					<div class="form-group" style="width:90px; margin:auto; display: none;" id="loading_edit_lapgiativi">
                        <div><p class="text-danger" ><b>Please wait...</b></p></div>
                        <div><img src='/laravel1/storage/uploads/loading_images/loading.gif' /></div>
                    </div>
                    <!-- Submit -->
                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-2">
                            <button type="submit" class="btn_admin primary">Submit</button>
                            <button class="btn_admin warning" type="reset" >Reset</button>
                            <button type="button" class="btn_admin danger pull-right" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- message edit success -->
<div id="edit_lapgiativi_success" class="modal fade" role="dialog">
    <div class="modal-dialog">
    <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <h3 align="center" style="color:green;">Edit thành công !</h3>
            </div>
        </div>
    </div>
</div>


<style type="text/css">



.thumbnail{

    height: 100px;
    margin: 10px;
}


/* End upload file */
</style>