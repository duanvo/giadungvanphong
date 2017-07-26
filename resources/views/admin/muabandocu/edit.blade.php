
<!-- Modal edit muabandocu-->

<div id="editmuabandocuModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="content modal_background">
            <div class="panel-title">
                <h3 class="modal_header" align="center">Edit Mua bán đồ cũ</h3>
            </div>
            <div class="modal-body">
                <form action="" method="POST" class="form-horizontal" role="form" id="validate_edit_muabandocu" enctype="multiple/form-data">

                    <!-- edit Name -->
                    <div class="form-group">
                        <label for="name" class="col-md-2 control-label">Edit tiêu đề</label>
                        <div class="col-md-9">
                        	<input type="text" name="edit_muabandocu_id" id="edit_muabandocu_id" class="hidden">
                            <input type="text" class="form-control" id="edit_tittle_muabandocu" name="edit_tittle_muabandocu" placeholder="Tên sản phẩm" autofocus>
                            <div class="has-error"><i><span class="help-block error errortittle_edit_muabandocu"></span></i></div>
                        </div>
                    </div>

                    <!-- Edit Type -->
                    <div class="form-group ">
                        <label for="level" class="col-md-2 control-label">Loại hàng</label>
                        <div class="col-md-9">
                           <select name="edit_type_muabandocu" id="edit_type_muabandocu" class="form-control" >
                                <option value="" selected disabled hidden>Chọn loại sản phẩm</option>
                                <option value="bandocu">Bán đồ cũ</option>
                                <option value="muadocu">Mua đồ cũ</option>
                           </select>
                        </div>
                    </div>

                    <!-- edit Cost -->
                    <div class="form-group">
                        <label for="cost" class="col-md-2 control-label">Edit Gía</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="edit_cost_muabandocu" name="edit_cost_muabandocu" placeholder="Gía sản phẩm">
                            <div class="has-error"><i><span class="help-block errorCost_edit"></span></i></div>
                        </div>
                    </div>
                    <!-- edit Images -->
                    <div class="form-group">
                        <label for="file_muabandocu_main_edit" class="col-md-2 control-label">Edit ảnh home</label>
                        <div class="col-md-9">
                            <input id="file_muabandocu_main_edit" type="file" name="file_muabandocu_main_edit" multiple/>
                            <div id="result_muabandocu" /></div>
                        </div>
                    </div>
                    <!-- edit Images -->
                    <div class="form-group">
                        <label for="files" class="col-md-2 control-label">Edit ảnh</label>
                        <div class="col-md-9">
                            <input id="files" type="file" name="file_muabandocu[]" multiple/>
                            <div id="result_muabandocu" /></div>
                        </div>
                    </div>

                    <!-- edit Introduce -->
                    <div class="form-group">
                        <label for="introduce" class="col-md-2 control-label">Edit Thông tin</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="edit_introduce_muabandocu" name="edit_introduce_muabandocu" placeholder="Thông tin sản phẩm"></textarea>
                            <div class="has-error"><i><span class="help-block errorIntroduce_edit"></span></i></div>
                        </div>
                    </div>
					<div class="form-group" style="width:90px; margin:auto; display: none;" id="loading_edit_muabandocu">
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
<div id="edit_muabandocu_success" class="modal fade" role="dialog">
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