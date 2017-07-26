
<!-- Modal Add muabandocu-->

<div id="addmuabandocuModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="content modal_background">
            <div class="panel-title">
                <h3 class="modal_header" align="center">Thêm Sản Phẩm mua bán đồ cũ</h3>
            </div>
            <div class="modal-body">
                <form action="" method="POST" class="form-horizontal" role="form" id="validate_add_muabandocu" enctype="multiple/form-data">

                    <!-- Add Name -->
                    <div class="form-group">
                        <label for="name" class="col-md-2 control-label">Sản Phẩm</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="add_tittle_muabandocu" name="add_tittle_muabandocu" placeholder="Tên sản phẩm" autofocus>
                            <div class="has-error"><i><span class="help-block error errortittle_add_muabandocu"></span></i></div>
                        </div>
                    </div>

                    <!-- Add Type -->
                    <div class="form-group ">
                        <label for="level" class="col-md-2 control-label">Loại hàng</label>
                        <div class="col-md-9">
                           <select name="add_type_muabandocu" id="add_type_muabandocu" class="form-control" >
                                <option value="" selected disabled hidden>Chọn loại sản phẩm</option>
                                <option value="bandocu">Bán đồ cũ</option>
                                <option value="muadocu">Mua đồ cũ</option>
                           </select>
                        </div>
                    </div>

                    <!-- Add Cost -->
                    <div class="form-group">
                        <label for="cost" class="col-md-2 control-label">Gía</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="add_cost_muabandocu" name="add_cost_muabandocu" placeholder="Gía sản phẩm">
                            <div class="has-error"><i><span class="help-block errorCost_add"></span></i></div>
                        </div>
                    </div>
                    <!-- Add Images -->
                    <div class="form-group">
                        <label for="file_muabandocu_main" class="col-md-2 control-label">Ảnh</label>
                        <div class="col-md-9">
                            <input id="file_muabandocu_main" type="file" name="file_muabandocu_main" multiple/>
                            <div id="result_muabandocu" /></div>
                        </div>
                    </div>
                    <!-- Add Images -->
                    <div class="form-group">
                        <label for="file_muabandocu" class="col-md-2 control-label">Ảnh minh họa</label>
                        <div class="col-md-9">
                            <input id="file_muabandocu" type="file" name="file_muabandocu[]" multiple/>
                            <div id="result_muabandocu" /></div>
                        </div>
                    </div>

                    <!-- Add Introduce -->
                    <div class="form-group">
                        <label for="introduce" class="col-md-2 control-label">Thông tin</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="add_introduce_muabandocu" name="add_introduce_muabandocu" placeholder="Thông tin sản phẩm"></textarea>
                            <div class="has-error"><i><span class="help-block errorIntroduce_add"></span></i></div>
                        </div>
                    </div>
					<div class="form-group" style="width:90px; margin:auto; display: none;" id="loading_add_muabandocu">
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
<div id="add_muabandocu_success" class="modal fade" role="dialog">
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