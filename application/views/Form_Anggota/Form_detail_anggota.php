<div>
        <ul class="breadcrumb">
            <li>
                <a href="<?= base_url()?>Admin/ControllerAnggota/Controller_anggota/getDataanggota">Anggota</a>
            </li>
            <li>
                <a href="#">Detail Anggota</a>
            </li>
        </ul>
 </div>
    
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon glyphicon-align-justify"></i>  Detail Anggota</h2>
            </div>
            <div class="box-content" style="margin-top: 15px;">  
                 <div class="row">
                     <div class="col-md-2">
                        <img src="<?php echo base_url('assets/FotoAnggota/').$datadetail->foto;?>"   style="height: 100%;width: 80%;"alt=""/>
                     </div>
                        <div class="col-md-5">                    
                            <ul class="keyvalue">
                                <li>  
                                    <strong> Nama  </strong>  
                                    <span class="notranslate"> <?= $datadetail->nama?> </span>  
                                </li>
                                <li>  
                                    <strong> Kelompok </strong>  
                                    <span class="notranslate"><?= $datadetail->kelompok?> </span>  
                                </li>
                                <li>  
                                    <strong> KTA </strong>  
                                    <span class="notranslate"><?= $datadetail->kta?></span>  
                                </li>
                                <li>  
                                    <strong> Tempat Lahir </strong>  
                                    <span class="notranslate"><?= $datadetail->tempat_lahir?></span>  
                                </li>
                                <li>  
                                    <strong> Tanggal Lahir  </strong>  
                                    <span class="notranslate"><?= $datadetail->tanggal_lahir?></span>  
                                </li>
                                <li>  
                                    <strong> Alamat </strong>  
                                    <span class="notranslate"><?= $datadetail->alamat?></span>  
                                </li> 
                                <li>  
                                    <strong> Tanggal terdaftar </strong>  
                                    <span class="notranslate"><?php $tgl=explode(' ',$datadetail->tanggal_terdaftar);echo $tgl[0];?></span>  
                                </li>   
                                <li>  
                                    <strong> Simpanan Wajib </strong>  
                                    <span class="notranslate"><?php if($datadetail->simpanan_wajib ==null) {echo "-";}else{echo $datadetail->simpanan_wajib;}?></span>  
                                </li>    
                                <li>  
                                    <strong> Simpanan Wajib Khusus </strong>  
                                    <span class="notranslate"><?php if($datadetail->simpanan_wajib_khusus ==null) {echo "-";}else{echo $datadetail->simpanan_wajib_khusus;}?></span>  
                                </li>      
                                                                          
                            </ul>                                        
                        </div>     
                        <div class="col-md-5">
                        <ul class="keyvalue">
                                <li>  
                                    <strong> Wilayah </strong>  
                                    <span class="notranslate"> <?= $datadetail->wilayah?></span>  
                                </li>
                                <li>  
                                    <strong>Agama </strong>  
                                    <span class="notranslate"> <?= $datadetail->agama?> </span>  
                                </li>
                                <li>  
                                    <strong> Pendidikan terakhir</strong>  
                                    <span class="notranslate"> <?= $datadetail->pendidikan_terakhir?></span>  
                                </li>
                                <li>  
                                    <strong> Status</strong>  
                                    <span class="notranslate"><?= $datadetail->status_kawin?></span>  
                                </li>
                                <li>  
                                    <strong> Usaha </strong>  
                                    <span class="notranslate"><?= $datadetail->nama_usaha?></span>  
                                </li>
                                <li>  
                                    <strong> Anggota Keluarga </strong>  
                                    <span class="notranslate"><?php if($datadetail->anggota_keluarga ==null) {echo "-";}else{echo $datadetail->anggota_keluarga;}?></span>  
                                </li>      
                                <li>  
                                    <strong> Nomor KTA </strong>  
                                    <span class="notranslate"><?php if($datadetail->nomor_kta ==null) {echo "-";}else{echo $datadetail->nomor_kta;}?></span>  
                                </li>  
                                <li>  
                                    <strong> Simpanan Pokok </strong>  
                                    <span class="notranslate"><?php if($datadetail->simpanan_pokok ==null) {echo "-";}else{echo $datadetail->simpanan_pokok;}?></span>  
                                </li>  
                                <li>  
                                    <strong> Keterangan </strong>  
                                    <span class="notranslate"><?php if($datadetail->ket ==null) {echo "-";}else{echo $datadetail->ket;}?></span>  
                                </li>                                  
                            </ul>                    
                        </div>                   
                     </div>
                </div>                                                                                                    
            </div>
        </div>
    </div>
</div>