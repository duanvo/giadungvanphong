
<!-- Modal Add lapgiativi-->

<div id="addlapgiativiModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="content modal_background">
            <div class="panel-title">
                <h3 class="modal_header" align="center">Lắp gía tivi</h3>
            </div>
            <div class="modal-body">
                <form action="" method="POST" class="form-horizontal" role="form" id="validate_add_lapgiativi" enctype="multiple/form-data">

                    <!-- Add Name -->
                    <div class="form-group">
                        <label for="name" class="col-md-2 control-label">Tiêu đề</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="add_tittle_lapgiativi" name="add_tittle_lapgiativi" placeholder="Tên sản phẩm" autofocus>
                            <div class="has-error"><i><span class="help-block error errortittle_add_lapgiativi"></span></i></div>
                        </div>
                    </div>

                    <!-- Add Images -->
                    <div class="form-group">
                        <label for="file_lapgiativi_main" class="col-md-2 control-label">Ảnh</label>
                        <div class="col-md-9">
                            <input id="file_lapgiativi_main" type="file" name="file_lapgiativi_main" multiple/>
                            <div id="result_lapgiativi" /></div>
                        </div>
                    </div>

                    <!-- Add Introduce -->
                    <div class="form-group">
                        <label for="introduce" class="col-md-2 control-label">Thông tin</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="add_introduce_lapgiativi" name="add_introduce_lapgiativi" placeholder="Thông tin sản phẩm"></textarea>
                            <div class="has-error"><i><span class="help-block errorIntroduce_add"></span></i></div>
                        </div>
                    </div>
					<div class="form-group" style="width:90px; margin:auto; display: none;" id="loading_add_lapgiativi">
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
<div id="add_lapgiativi_success" class="modal fade" role="dialog">
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