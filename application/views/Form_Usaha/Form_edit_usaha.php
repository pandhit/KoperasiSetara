<div>
        <ul class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Edit Berita</a>
            </li>
        </ul>
 </div>
    
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i>Edit</h2>
            </div>
            <div class="box-content">
                <form name="fromeditalat" action="<?= base_url('Admin/ControllerUsahaController_usaha/editusaha')?>"  method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Judul</label>
                        <input required type="Text" name="NamaUsaha" class="form-control" value="<?php echo $editusaha->nama_usaha?>">
                    </div>
                    <div class="form-group">
                        <label>Isi</label>
                        <textarea required type="Text" name="Deskripsi" class="form-control" value="<?php echo $editusaha->deskripsi?>"></textarea>
                    </div>                                 
                    <button type="submit" name="submitid" value=<?= $editusaha->nomor?> class="btn btn-default">Update</button>
                </form>

            </div>
        </div>
    </div>
</div>