<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Controller_anggota extends CI_Controller
    {
        //ini harus ada untuk load model
        function __construct() {
            parent::__construct();
            $this->load->model('Model_anggota');
            
        }

        function getDataanggota()
        {
            $data['anggota'] = $this->Model_anggota->get_anggota();
            $this->template->load('Template/Template_admin','Form_anggota/Form_data_Anggota',$data);
        }

        function addanggota()
        {
                $anggota = array (
                    'judul'=>$this->input->post('judulanggota'),                                    
                    'isi'=>$this->input->post('isianggota'),
                    'gambar'=>$_FILES['gambar']['name']
                );  
            $addanggota= $this->Model_anggota->add_anggota($anggota);
            $this->upload_gambar();
            if($addanggota)
            {
                $this->session->set_flashdata('Status','Input Succes');
                redirect('Admin/Controlleranggota/Controller_anggota/getDataanggota');
            }
        }

        function viewFormEditanggota()
        {
            $id = $this->input->get('id_anggota');
            $data['editanggota'] = $this->Model_anggota->getDataanggotaById($id);
            //echo json_encode($data);
            $this->template->load('Template/Template_admin','Form_anggota/Form_edit_anggota',$data);;
        }

        function editanggota()
        {
            $id_anggota = $this->input->post('submitid');
            $anggota = array(
                            'judul'=>$this->input->post('judulanggota'),                                                     
                            'isi'=>$this->input->post('isianggota'),
                            'gambar'=>$_FILES['img']['name']
                            );
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
            $var = $this->Model_anggota->getDataanggotaById($id_anggota);
            unlink('assets/gambar/'.$var->gambar);
            $deleteanggota = $this->Model_anggota->delete_anggota($id_anggota);
            if($deleteanggota)
            {   
                
                $this->session->set_flashdata('Status','Delete Succes');
                redirect('Admin/Controlleranggota/Controller_anggota/getDataanggota');
            }
            else
            {
                $this->session->set_flashdata('Status','Delete Failed');
                redirect('Admin/Controlleranggota/Controller_anggota/tampilDataanggota');
            }
        }
        public function upload_gambar(){
            $config['upload_path']          = './assets/gambar/';
            $config['allowed_types']        = '*';           
            $this->load->library('upload', $config);
     
            if ( ! $this->upload->do_upload('gambar')){
                $error = array('error' => $this->upload->display_errors());
                echo json_encode($error);
            }else{
                $data = array('upload_data' => $this->upload->data());
                redirect('Admin/Controlleranggota/Controller_anggota/getDataanggota');
            }
        }
        
    }
?>