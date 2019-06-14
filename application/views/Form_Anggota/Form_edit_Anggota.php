<div>
        <ul class="breadcrumb">
            <li>
                <a href="#">Beranda</a>
            </li>
            <li>
                <a href="#">Edit Anggota</a>
            </li>
        </ul>
 </div>
    
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Edit</h2>
            </div>
            <div class="box-content">
               <?php echo form_open_multipart('Admin/ControllerAnggota/Controller_anggota/editanggota')?>
                    <div class="form-group">
                        <label>Kelompok</label>
                        <input required type="Text" name="Kelompok" class="form-control" value="<?php echo $editanggota->kelompok?>">
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input required type="Text" name="Nama" class="form-control" value="<?php echo $editanggota->nama?>">
                    </div>
                    <div class="form-group">
                        <label>KTA</label>
                        <input required type="Text" name="Kta" class="form-control" value="<?php echo $editanggota->kta?>">
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input required type="Text" name="Tempat_lahir" class="form-control" value="<?php echo $editanggota->tempat_lahir?>">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input required type="Text" name="Tanggal_lahir" class="form-control" value="<?php echo $editanggota->tanggal_lahir?>">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input required type="Text" name="Alamat" class="form-control" value="<?php echo $editanggota->alamat?>">
                    </div>
                    <div class="form-group">
                        <label>Wilayah</label>
                        <input required type="Text" name="Wilayah" class="form-control" value="<?php echo $editanggota->wilayah?>">
                    </div>
                    <div class="form-group">
                        <label>Agama</label>
                        <input required type="Text" name="Agama" class="form-control" value="<?php echo $editanggota->agama?>">
                    </div>
                    <div class="form-group">
                        <label>Pendidikan terakhir</label>
                        <input required type="Text" name="Pendidikan_terakhir" class="form-control" value="<?php echo $editanggota->pendidikan_terakhir?>">
                    </div>
                    <div class="form-group">
                        <label>Status kawin</label>
                        <input required type="Text" name="Status" class="form-control" value="<?php echo $editanggota->status_kawin?>">
                    </div>
                    <div class="form-group">
                        <label>Usaha</label>
                        <input required type="Text" name="usaha" class="form-control" value="<?php echo $editanggota->usaha?>">
                    </div>
                    <div class="form-group">
                        <label>Anggota keluarga</label>
                        <input required type="Text" name="anggota_keluarga" class="form-control" value="<?php if($editanggota->anggota_keluarga ==null) {echo "-";}else{echo $editanggota->anggota_keluarga;}?>">
                    </div>
                    <div class="form-group">
                        <label>Tanggal terdaftar</label>
                        <input  type="Text" disabled="true" class="form-control" value="<?php $tgl=explode(' ',$editanggota->tanggal_terdaftar);echo $tgl[0]; ?>">
                    </div>
                    <div class="form-group">
                        <label>Nomor KTA</label>
                        <input required type="Text" name="nomor_kta" class="form-control" value="<?php if($editanggota->nomor_kta ==null) {echo "-";}else{echo $editanggota->nomor_kta;}?>">
                    </div>
                    <div class="form-group">
                        <label>Simpanan Wajib</label>
                        <input required type="Text" name="simpanan_wajib" class="form-control" value="<?php if($editanggota->simpanan_wajib ==null) {echo "-";}else{echo $editanggota->simpanan_wajib;}?>">
                    </div>
                    <div class="form-group">
                        <label>Simpanan Pokok</label>
                        <input required type="Text" name="simpanan_pokok" class="form-control" value="<?php if($editanggota->simpanan_pokok ==null) {echo "-";}else{echo $editanggota->simpanan_pokok;}?>">
                    </div>
                    <div class="form-group">
                        <label>Simpanan Wajib Khusus</label>
                        <input required type="Text" name="simpanan_wajib_khusus" class="form-control" value="<?php if($editanggota->simpanan_wajib_khusus ==null) {echo "-";}else{echo $editanggota->simpanan_wajib_khusus;}?>">
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <input required type="Text" name="ket" class="form-control" value="<?php if($editanggota->ket ==null) {echo "-";}else{echo $editanggota->ket;}?>">
                    </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" name='foto' accept="image/x-png,image/gif,image/jpeg" class="form-control">
                    </div>  
                    <button type="submit" name="submitid" value=<?= $editanggota->id?> class="btn btn-default">Update</button>
                </form>       
            </div>
        </div>
    </div>
</div>