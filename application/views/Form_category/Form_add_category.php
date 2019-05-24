<div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3>Tambah Data Category</h3>
            </div>
            <div class="modal-body">
            <!-- start body -->
                <div class="row">
                    <div class="box col-md-12">
                            <div class="box-content">
                                <form name="fromaddcategory" action="<?= base_url('ControllerCategory/Controller_category/addCategory')?>"  method="post">
                                    <div class="form-group">
                                        <label>Nama Category</label>
                                        <input required type="Text" name="name" class="form-control" placeholder="Enter Name">
                                    </div>
                                        </select>    
                                    </div>
                            </div>
                    </div>
                    <!--/span-->
                </div><!--/row-->
              <!-- end body -->
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Tambah Category</button>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
