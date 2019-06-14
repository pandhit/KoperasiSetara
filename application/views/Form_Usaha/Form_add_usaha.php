<div class="modal fade" id="addusaha" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3>Tambah Data Usaha</h3>
            </div>
            <div class="modal-body">
            <!-- start body -->
                <div class="row">
                    <div class="box col-md-12">
                            <div class="box-content">                           
                                <?php echo form_open_multipart('Admin/ControllerUsaha/Controller_usaha/addUsaha'); ?>
                                        <div class="form-group">
                                            <label>Nama Usaha</label>
                                            <input required type="Text" name="NamaUsaha" class="form-control" placeholder="Masukan Nama Usaha">
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <textarea required type="Text" name="Deskripsi" class="form-control"> </textarea>
                                        </div>                                                                   
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
