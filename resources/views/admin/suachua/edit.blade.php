
<!-- Modal edit suachua-->

<div id="editsuachuaModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="content modal_background">
            <div class="panel-title">
                <h3 class="modal_header" align="center">Edit Sản Phẩm sữa chữa</h3>
            </div>
            <div class="modal-body">
                <form action="" method="POST" class="form-horizontal" role="form" id="validate_edit_suachua" enctype="multiple/form-data">

                    <!-- edit Name -->
                    <div class="form-group">
                        <label for="name" class="col-md-2 control-label">Edit Sản Phẩm sữa chữa</label>
                        <div class="col-md-9">
                        	<input type="text" name="edit_suachua_id" id="edit_suachua_id" class="hidden">
                            <input type="text" class="form-control" id="edit_tittle_suachua" name="edit_tittle_suachua" placeholder="Tên sản phẩm" autofocus>
                            <div class="has-error"><i><span class="help-block error errortittle_edit_suachua"></span></i></div>
                        </div>
                    </div>

                    <!-- edit Level -->
                    <div class="form-group ">
                        <label for="level" class="col-md-2 control-label">Edit Loại hàng sửa chữa</label>
                        <div class="col-md-9">
                           <select name="edit_type_suachua" id="edit_type_suachua" class="form-control" >
                                <option value="" selected disabled hidden>Chọn loại sản phẩm</option>
                                <option value="dieuhoa">Điều hòa</option>
                                <option value="tulanh">Tủ lạnh</option>
                                <option value="maygiat">Máy giặt</option>
                                <option value="lovisong">Lò vi sóng</option>
                                <option value="diennuoc">Điện nước</option>
                           </select>
                        </div>
                    </div>

                    <!-- edit Introduce -->
                    <div class="form-group">
                        <label for="introduce" class="col-md-2 control-label">Edit Thông tin sửa chữa</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="edit_introduce_suachua" name="edit_introduce_suachua" placeholder="Thông tin sản phẩm"></textarea>
                            <div class="has-error"><i><span class="help-block errorIntroduce_edit"></span></i></div>
                        </div>
                    </div>
					<div class="form-group" style="width:90px; margin:auto; display: none;" id="loading_edit_suachua">
                        <div><p class="text-danger" ><b>Please wait...</b></p></div>
                        <div><img src='/giadungvanphong/storage/uploads/loading_images/loading.gif' /></div>
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
<div id="edit_suachua_success" class="modal fade" role="dialog">
    <div class="modal-dialog">
    <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <h3 align="center" style="color:green;">Edit sản phẩm thành công !</h3>
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