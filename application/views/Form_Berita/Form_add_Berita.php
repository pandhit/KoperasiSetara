<div class="modal fade" id="addberita" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                            <!-- <form name="fromaddcategory" action="<?= base_url('Admin/ControllerBerita/Controller_Berita/addBerita')?>"  method="post"> -->
                                <?php echo form_open_multipart('Admin/ControllerBerita/Controller_Berita/addBerita'); ?>
                                    <div class="form-group">
                                        <label>Judul</label>
                                        <input required type="Text" name="judulberita" class="form-control" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group">
                                        <label>Isi Berita</label>
                                        <input required type="Text" name="isiberita" class="form-control" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group">
                                        <label>Gambar</label>
                                        <input required type="file" name='gambar' accept="image/x-png,image/gif,image/jpeg" class="form-control">
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
