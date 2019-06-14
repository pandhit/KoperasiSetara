   <!-- left menu starts -->
   <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a class="nav-link" href="<?= base_url('Admin/ControllerAdmin/Dashboard')?>"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a>
                        
                        <li class="nav-item ">
                                
                            <div class="collapse in" id="FormMaster">
                                <ul class="nav">
                                    <li class="nav-item ">
                                        <a class="nav-link" href="<?= base_url()?>Admin/ControllerBerita/Controller_berita/getDataBerita">
                                        <span> Berita </span>
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="<?= base_url()?>Admin/ControllerAnggota/Controller_anggota/getDataanggota">
                                        <span> Anggota Koperasi</span>     
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="<?= base_url()?>Admin/ControllerUsaha/Controller_usaha/getDatausaha">
                                        <span> Jenis Usaha </span>
                                        </a>
                                    </li>                                                                      
                                </ul>
                            </div>
                        </li>                   
                    </ul>
                    <label hidden id="for-is-ajax" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label>
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->