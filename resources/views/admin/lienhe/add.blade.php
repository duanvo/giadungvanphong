
<!-- Modal Add lienhe-->

<div id="addlienheModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="content modal_background">
            <div class="panel-title">
                <h3 class="modal_header" align="center">Thông tin liên hệ</h3>
            </div>
            <div class="modal-body">
                <form action="" method="POST" class="form-horizontal" role="form" id="validate_add_lienhe" enctype="multiple/form-data">

                    <!-- Add Name -->
                    <div class="form-group">
                        <label for="name" class="col-md-2 control-label">Số điện thoại</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="add_sdt" name="add_sdt" placeholder="SDT" autofocus>
                            <div class="has-error"><i><span class="help-block error error_sdt_lienhe"></span></i></div>
                        </div>
                    </div>

                    <!-- Add Cost -->
                    <div class="form-group">
                        <label for="cost" class="col-md-2 control-label">Địa chỉ</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="add_diachi" name="add_diachi" placeholder="Dia chi">
                            <div class="has-error"><i><span class="help-block error error_diachi_lienhe"></span></i></div>
                        </div>
                    </div>

					<div class="form-group" style="width:90px; margin:auto; display: none;" id="loading_add_lienhe">
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
<!-- message add success -->
<div id="add_lienhe_success" class="modal fade" role="dialog">
    <div class="modal-dialog">
    <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <h3 align="center" style="color:green;">Thêm địa chỉ thành công !</h3>
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