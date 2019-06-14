<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Controller_anggota extends CI_Controller
    {
        //ini harus ada untuk load model
        function __construct() {
            parent::__construct();
            $this->load->model('Model_anggota');
            $this->load->model('Model_kelompok');
        }
        function getDataKelompok()
        {  
            $nama = $_POST["nama"];
            $data = $this->Model_kelompok->get_kelompok($nama);
            echo json_encode($data);
        }
        
        function getDataById()
        {
            $id = $_GET["id"];
            $data['datadetail'] = $this->Model_anggota->get_anggota_by_id($id);
            $this->template->load('Template/Template_admin','Form_anggota/Form_detail_anggota',$data);

        }

        function getDataanggota()
        {
            $data['anggota'] = $this->Model_anggota->get_anggota();
            $this->template->load('Template/Template_admin','Form_anggota/Form_data_Anggota',$data);
        }

        function addanggota()
        {
                $foto = get_current_date_img().'_'.str_replace(' ','_',$_FILES['foto']['name']);
                if($this->upload_gambar($foto)){
                        $anggota = array (
                            'kelompok'=>$this->input->post('Kelompok'),                                    
                            'nama'=>$this->input->post('Nama'),
                            'kta'=>$this->input->post('Kta'),
                            'alamat'=>$this->input->post('Alamat'),
                            'tempat_lahir'=>$this->input->post('Tempat_lahir') ,
                            'tanggal_lahir'=>$this->input->post('Tanggal_lahir'),     
                            'agama'=>$this->input->post('Agama'),
                            'status_kawin'=>$this->input->post('Status'),
                            'usaha'=>$this->input->post('usaha'),
                            'anggota_keluarga'=>$this->input->post('anggota_keluarga'),   
                            'nomor_kta'=>$this->input->post('nomor_kta'), 
                            'simpanan_wajib'=>$this->input->post('simpanan_wajib'), 
                            'simpanan_pokok'=>$this->input->post('simpanan_pokok'), 
                            'simpanan_wajib_khusus'=>$this->input->post('simpanan_wajib_khusus'), 
                            'ket'=>$this->input->post('ket'), 
                            'foto'=>$foto
                        );  
                    $addanggota= $this->Model_anggota->add_anggota($anggota);   
                    
                    if($addanggota)
                    {
                        $this->session->set_flashdata('Status','Input Succes');
                        redirect('Admin/Controlleranggota/Controller_anggota/getDataanggota');
                    }
                }  
                else{
                    $this->session->set_flashdata('Status','Ukuran foto terlalu besar');
                    redirect('Admin/Controlleranggota/Controller_anggota/getDataanggota');
                }   
               
        }

        function viewFormEditanggota()
        {
            $id = $this->input->get('id_anggota');
            $data['editanggota'] = $this->Model_anggota->get_anggota_by_id($id);
            //echo json_encode($data);
            $this->template->load('Template/Template_admin','Form_anggota/Form_edit_anggota',$data);;
        }

        function editanggota()
        {
            $id_anggota = $this->input->post('submitid');
            $foto = get_current_date_img().'_'.str_replace(' ','_',$_FILES['foto']['name']);
            // echo json_encode($foto);
            $anggota = array(
                'kelompok'=>$this->input->post('Kelompok'),                                    
                'nama'=>$this->input->post('Nama'),
                'kta'=>$this->input->post('Kta'),
                'alamat'=>$this->input->post('Alamat'),
                'tempat_lahir'=>$this->input->post('Tempat_lahir') ,
                'tanggal_lahir'=>$this->input->post('Tanggal_lahir'),   
                'wilayah'=>$this->input->post('Wilayah'),
                'agama'=>$this->input->post('Agama'),
                'status_kawin'=>$this->input->post('Status'),
                'pendidikan_terakhir'=>$this->input->post('Pendidikan_terakhir'),
                'usaha'=>$this->input->post('usaha'),
                'anggota_keluarga'=>$this->input->post('anggota_keluarga'),   
                'nomor_kta'=>$this->input->post('nomor_kta'), 
                'simpanan_wajib'=>$this->input->post('simpanan_wajib'), 
                'simpanan_pokok'=>$this->input->post('simpanan_pokok'), 
                'simpanan_wajib_khusus'=>$this->input->post('simpanan_wajib_khusus'), 
                'ket'=>$this->input->post('ket'), 
                'foto'=>$foto
            );
            $var = $this->Model_anggota->get_anggota_by_id($id_anggota);        
            if($var->foto)
            {
                unlink('assets/FotoAnggota/'.$var->foto);
            }
            $this->upload_gambar($foto);
            $editanggota= $this->Model_anggota->update_anggota($id_anggota,$anggota);
            if($editanggota)
            {   
            $this->session->set_flashdata('Status','Edit Succes');
            
            redirect('Admin/Controlleranggota/Controller_anggota/getDataanggota');
            }
            else
            {
            $this->session->set_flashdata('Status','Edit Failed');
            redirect('Admin/Controlleranggota/Controller_anggota/getDataanggota');  
            } 
        }

        function deleteanggota()
        {
            $id_anggota=$this->input->get('id_anggota');
            $var = $this->Model_anggota->get_anggota_by_id($id_anggota);
            unlink('assets/FotoAnggota/'.$var->foto);
            $deleteanggota = $this->Model_anggota->delete_anggota($id_anggota);
            if($deleteanggota)
            {   
                
                $this->session->set_flashdata('Status','Delete Succes');
                redirect('Admin/Controlleranggota/Controller_anggota/getDataanggota');
            }
            else
            {
                $this->session->set_flashdata('Status','Delete Failed');
                redirect('Admin/Controlleranggota/Controller_anggota/getDataanggota');
            }
        }
        public function upload_gambar($foto){
            $config['upload_path']          = './assets/FotoAnggota/';
            $config['allowed_types']        = '*';  
            $config['file_name']      = $foto;   
            $config['max_size'] = 50;
            $this->load->library('upload', $config);
            
            if ( ! $this->upload->do_upload('foto')){
                $error = array('error' => $this->upload->display_errors());
                echo json_encode($error);
                return false;
            }else{
                $data = array('upload_data' => $this->upload->data());   
                return true;            
            }
        }
        
    }
?>