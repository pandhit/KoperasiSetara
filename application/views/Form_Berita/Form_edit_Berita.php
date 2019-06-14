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
                <form name="fromeditalat" action="<?= base_url('Admin/ControllerBerita/Controller_berita/editBerita')?>"  method="post">
                    <div class="form-group">
                        <label>Judul</label>
                        <input required type="Text" name="judulberita" class="form-control" value="<?php echo $editBerita->judul?>">
                    </div>
                    <div class="form-group">
                        <label>Isi</label>
                        <input required type="Text" name="isiberita" class="form-control" value="<?php echo $editBerita->isi?>">
                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        <input required type="file" name='gambar' accept="image/x-png,image/gif,image/jpeg" class="form-control">
                    </div>                     
                    <button type="submit" name="submitid" value=<?= $editBerita->id?> class="btn btn-default">Update</button>
                </form>

            </div>
        </div>
    </div>
</div>