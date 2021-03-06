<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Controller_berita extends CI_Controller
    {
        //ini harus ada untuk load model
        function __construct() {
            parent::__construct();
            $this->load->model('Model_berita');
            
        }

        function getDataBerita()
        {
            $data['Berita'] = $this->Model_berita->get_berita();
            $this->template->load('Template/Template_admin','Form_Berita/Form_data_Berita',$data);
        }

        function addBerita()
        {    
            $foto = get_current_date_img().'_'.str_replace(' ','_',$_FILES['gambar']['name']);
                $Berita = array (
                    'judul'=>$this->input->post('judulberita'),                                    
                    'isi'=>$this->input->post('isiberita'),
                    'gambar'=>$foto
                );  
            $addBerita= $this->Model_berita->add_berita($Berita);
            $this->upload_gambar($foto);
            if($addBerita)
            {
                $this->session->set_flashdata('Status','Input Succes');
                redirect('Admin/ControllerBerita/Controller_berita/getDataBerita');
            }
        }

        function viewFormEditBerita()
        {
            $id = $this->input->get('id_berita');
            $data['editBerita'] = $this->Model_berita->getDataBeritaById($id);
            //echo json_encode($data);
            $this->template->load('Template/Template_admin','Form_Berita/Form_edit_Berita',$data);;
        }

        function editBerita()
        {
            $id_Berita = $this->input->post('submitid');
            $foto = get_current_date_img().'_'.str_replace(' ','_',$_FILES['gambar']['name']);
            $Berita = array(
                            'judul'=>$this->input->post('judulberita'),                                                     
                            'isi'=>$this->input->post('isiberita'),
                            'gambar'=>$foto
                            );
           
            $var = $this->Model_berita->getDataBeritaById($id_Berita);    
            if($var->gambar)
            {
                unlink('assets/gambar/'.$var->gambar);
            }
            $this->upload_gambar($foto);           
           $editBerita= $this->Model_berita->update_berita($id_Berita,$Berita);
            if($editBerita)
            {   
            $this->session->set_flashdata('Status','Edit Succes');
            redirect('Admin/ControllerBerita/Controller_berita/getDataBerita');
            }
            else
            {
            $this->session->set_flashdata('Status','Edit Failed');
            redirect('Admin/ControllerBerita/Controller_berita/getDataBerita');  
            } 
        }

        function deleteBerita()
        {
            $id_Berita=$this->input->get('id_berita');
            $var = $this->Model_berita->getDataBeritaById($id_Berita);
            unlink('assets/gambar/'.$var->gambar);
            $deleteBerita = $this->Model_berita->delete_Berita($id_Berita);
            if($deleteBerita)
            {   
                
                $this->session->set_flashdata('Status','Delete Succes');
                redirect('Admin/ControllerBerita/Controller_berita/getDataBerita');
            }
            else
            {
                $this->session->set_flashdata('Status','Delete Failed');
                redirect('Admin/ControllerBerita/Controller_berita/ta    mpilDataBerita');
            }
        }
        public function upload_gambar($foto){
            $config['upload_path']          = './assets/gambar/';
            $config['allowed_types']        = '*';   
            $config['file_name']      = $foto;                    
            $this->load->library('upload', $config);
     
            if ( ! $this->upload->do_upload('gambar')){
                $error = array('error' => $this->upload->display_errors());
                echo json_encode($error);
            }else{
                $data = array('upload_data' => $this->upload->data());            
            }
        }
        
    }
?>