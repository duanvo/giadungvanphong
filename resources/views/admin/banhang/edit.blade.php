
<!-- Modal Add banhang-->

<div id="editsanphamModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="content modal_background">
            <div class="panel-title">
                <h3 class="modal_header" align="center">Sửa Sản Phẩm</h3>
            </div>
            <div class="modal-body">
                <form action="" method="POST" class="form-horizontal" role="form" id="validate_edit_banhang">

                    <!-- Add Name -->
                    <div class="form-group">
                    	<input type="text" name="old_id_banhang" id="old_id_banhang" class="hidden">
                        <label for="name" class="col-md-2 control-label">Sản Phẩm</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="edit_tittle_sanpham" name="edit_tittle_sanpham" placeholder="Tên sản phẩm" disabled>
                            <div class="has-error"><i><span class="help-block error errortittle_add"></span></i></div>
                        </div>
                    </div>

                    <!-- Add Level -->
                    <div class="form-group ">
                        <label for="level" class="col-md-2 control-label">Loại sản phẩm</label>
                        <div class="col-md-9">
                           <select name="edit_type_sanpham" id="edit_type_sanpham" class="form-control" >
                                <option value="" selected disabled hidden>Chọn loại sản phẩm</option>
                                <option value="dienmay">Điện Máy</option>
                                <option value="vanphong">Văn Phòng</option>
                                <option value="dogiadung">Đồ Gia Dụng</option>
                           </select>
                        </div>
                    </div>

                    <!-- Add Cost -->
                    <div class="form-group">
                        <label for="cost" class="col-md-2 control-label">Gía giảm còn</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="edit_cost_discount_sanpham" name="edit_cost_discount_sanpham" placeholder="Gía giảm còn">
                            <div class="has-error"><i><span class="help-block errorCost_discount_add"></span></i></div>
                        </div>
                        <label for="cost" class="col-md-2 control-label">Gía gốc sản phẩm</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="edit_cost_sanpham" name="edit_cost_sanpham" placeholder="Gía gốc sản phẩm">
                            <div class="has-error"><i><span class="help-block errorCost_add"></span></i></div>
                        </div>
                    </div>

                     <!-- Add Images -->
                    <div class="form-group">
                        <label for="file_product" class="col-md-2 control-label">Ảnh sản phẩm </label>
                        <div class="col-md-9">
                            <input id="file_product_edit" type="file" name="file_product_edit" />
                            <div id="result_product" /></div>
                        </div>
                    </div>
                    <!-- Add Introduce -->
                    <div class="form-group">
                        <label for="introduce" class="col-md-2 control-label">Thông tin sản phẩm</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="edit_introduce_sanpham" name="edit_introduce_sanpham" placeholder="Thông tin sản phẩm"></textarea>
                            <div class="has-error"><i><span class="help-block errorIntroduce_add"></span></i></div>
                        </div>
                    </div>
					<div class="form-group" style="width:90px; margin:auto; display: none;" id="loading_edit_banhang">
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
<!-- message add success -->
<div id="edit_banhang_success" class="modal fade" role="dialog">
    <div class="modal-dialog">
    <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <h3 align="center" style="color:green;">Sửa sản phẩm thành công !</h3>
            </div>
        </div>
    </div>
</div>
