
<!-- Modal Add suachua-->

<div id="addsuachuaModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="content modal_background">
            <div class="panel-title">
                <h3 class="modal_header" align="center">Thêm Sản Phẩm sữa chữa</h3>
            </div>
            <div class="modal-body">
                <form action="" method="POST" class="form-horizontal" role="form" id="validate_add_suachua" enctype="multiple/form-data">

                    <!-- Add Name -->
                    <div class="form-group">
                        <label for="name" class="col-md-2 control-label">Sản Phẩm sữa chữa</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="add_tittle_suachua" name="add_tittle_suachua" placeholder="Tên sản phẩm" autofocus>
                            <div class="has-error"><i><span class="help-block error errortittle_add_suachua"></span></i></div>
                        </div>
                    </div>

                    <!-- Add Level -->
                    <div class="form-group ">
                        <label for="level" class="col-md-2 control-label">Loại hàng sửa chữa</label>
                        <div class="col-md-9">
                           <select name="add_type_suachua" id="add_type_suachua" class="form-control" >
                                <option value="" selected disabled hidden>Chọn loại sản phẩm</option>
                                <option value="dieuhoa">Điều hòa</option>
                                <option value="tulanh">Tủ lạnh</option>
                                <option value="maygiat">Máy giặt</option>
                                <option value="lovisong">Lò vi sóng</option>
                           </select>
                        </div>
                    </div>

                    <!-- Add Cost -->
                    <div class="form-group">
                        <label for="cost" class="col-md-2 control-label">Gía sửa chữa</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="add_cost_suachua" name="add_cost_suachua" placeholder="Gía sản phẩm">
                            <div class="has-error"><i><span class="help-block errorCost_add"></span></i></div>
                        </div>
                    </div>

                    <!-- Add Images -->
                    <div class="form-group">
                        <label for="file_suachua" class="col-md-2 control-label">Ảnh minh họa</label>
                        <div class="col-md-9">
                            <input id="file_suachua" type="file" name="file_suachua[]" multiple/>
                            <div id="result_suachua" /></div>
                        </div>
                    </div>

                    <!-- Add Introduce -->
                    <div class="form-group">
                        <label for="introduce" class="col-md-2 control-label">Thông tin sửa chữa</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="add_introduce_suachua" name="add_introduce_suachua" placeholder="Thông tin sản phẩm"></textarea>
                            <div class="has-error"><i><span class="help-block errorIntroduce_add"></span></i></div>
                        </div>
                    </div>
					<div class="form-group" style="width:90px; margin:auto; display: none;" id="loading_add_suachua">
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
<div id="add_suachua_success" class="modal fade" role="dialog">
    <div class="modal-dialog">
    <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <h3 align="center" style="color:green;">Thêm sản phẩm thành công !</h3>
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