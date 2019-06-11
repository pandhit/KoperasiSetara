<style>
#kelompok-list{float:left;list-style:none;margin-top:5px;padding:0;width:91%;position: absolute;}
#kelompok-list li{padding: 10px; background: #f0f0f0; border-bottom: #bbb9b9 1px solid;}
#kelompok-list li:hover{background:#ece3d2;cursor: pointer;}
#search-box{padding: 10px;border: #a8d4b1 1px solid;border-radius:4px;}
</style>
<div class="modal fade" id="addberita" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3>Tambah Data Anggota</h3>
            </div>
            <div class="modal-body" data-spy="scroll" >
            <!-- start body -->
                <div class="row"style="height: 62VH;overflow-y: scroll;">
                    <div class="box col-md-12">
                            <div class="box-content">
                            <!-- <form name="fromaddcategory" action="<?= base_url('Admin/ControllerBerita/Controller_Berita/addBerita')?>"  method="post"> -->
                                <?php echo form_open('Admin/ControllerAnggota/Controller_anggota/addanggota'); ?>
                                    <div class="form-group">
                                        <label>Kelompok</label>
                                        <input required type="Text" id="search-box" name="Kelompok" class="form-control" placeholder="Masukan Kelompok">
                                        <div id="suggesstion-box"> 
                                            <ul id=kelompok-list> 

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input required type="Text"  id="input1" name="Nama" class="form-control" placeholder="Masukan Nama">
                                    </div>
                                    <div class="form-group">
                                        <label>KTA</label>
                                        <input required type="Text"   id="input2" name="Kta" class="form-control" placeholder="Masukan KTA">
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input required type="Text"   id="input3" name="Alamat" class="form-control" placeholder="Masukan Alamat">
                                    </div>  
                                    <div class="form-group">
                                        <label>Tempat lahir</label>
                                        <input required type="Text"  id="input4"  name="Tempat_lahir" class="form-control" placeholder="Masukan Tempat Lahir">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input required type="date"   id="input5" name="Tanggal_lahir" class="form-control" placeholder="Pilih Tanggal Lahir">
                                    </div>                                   
                                    <div class="form-group">                                        
                                        <label>Agama</label>                                    
                                        <select class="custom-select custom-select-lg mb-3 form-control" id="agama"  name="Agama">
                                        <option selected>Pilih salah satu</option>
                                        <option value="1">Katholik/Kristen</option>
                                        <option value="2">Hindu</option>
                                        <option value="3">Islam</option>
                                        <option value="4">Budha</option>
                                        <option value="5">Kong Hu Cu</option>
                                        </select>
                                    </div>   
                                    <div class="form-group">                                        
                                        <label>Status</label>                                    
                                        <select class="custom-select custom-select-lg mb-3 form-control" id="status"  name="Status">
                                        <option selected>Pilih salah satu</option>
                                        <option value="1">Nikah</option>
                                        <option value="2">Belum Nikah</option>                                        
                                        </select>
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
<script>
$(document).ready(function(){
	$("#search-box").keyup(function(){
        if($('#search-box').val()!='')
        {
            
            $.ajax({
            url: "<?php echo base_url('Admin/ControllerAnggota/Controller_anggota/getDataKelompok')?>",
            type: "POST",
            data: {nama :$('#search-box').val() },
            beforeSend: function(){
                $("#search-box").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
            },
            success: function(data){
                var nama = $.parseJSON(data)
                console.log(nama);
                $("#kelompok-list").empty();
                $("#suggesstion-box").show();
                for(var i=0;i<nama.length;i++)
                {
                    $("#kelompok-list").append(
                            "<li onClick=selectCountry("+nama[i]['id']+");>"+nama[i]['nama']+"</li>"
                    );
                }
                $("#search-box").css("background","#FFF");
            }
            });
        }
        else {
            $("#suggesstion-box").hide();
            $("#kelompok-list").empty();
        }
        });
});
//To select country name
function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
</script>