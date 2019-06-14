<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Controller_usaha extends CI_Controller
    {
        //ini harus ada untuk load model
        function __construct() {
            parent::__construct();
            $this->load->model('Model_usaha');
            
        }

        function getDatausaha()
        {
            $data['Usaha'] = $this->Model_usaha->get_usaha();
            $this->template->load('Template/Template_admin','Form_usaha/Form_data_usaha',$data);
        }

        function addUsaha()
        {    
                $usaha = array (                                
                    'nama_usaha'=>$this->input->post('NamaUsaha'),
                    'deskripsi'=>$this->input->post('Deskripsi')
                );  
            $addusaha= $this->Model_usaha->add_usaha($usaha);          
            if($addusaha)
            {
                $this->session->set_flashdata('Status','Input Succes');
                redirect('Admin/Controllerusaha/Controller_usaha/getDatausaha');
            }
        }

        function viewFormEditusaha()
        {
            $id = $this->input->get('id_usaha');
            $data['editusaha'] = $this->Model_usaha->getDataUsahaById($id);           
            $this->template->load('Template/Template_admin','Form_usaha/Form_edit_usaha',$data);;
        }

        function editusaha()
        {
            $id_usaha = $this->input->post('submitid');
            $usaha = array (                                
                'nama_usaha'=>$this->input->post('NamaUsaha'),
                'deskripsi'=>$this->input->post('Deskripsi')
            );  
            $editusaha= $this->Model_usaha->update_usaha($id_usaha,$usaha);
            if($editusaha)
            {   
            $this->session->set_flashdata('Status','Edit Succes');
            redirect('Admin/Controllerusaha/Controller_usaha/getDatausaha');
            }
            else
            {
            $this->session->set_flashdata('Status','Edit Failed');
            redirect('Admin/Controllerusaha/Controller_usaha/getDatausaha');  
            } 
        }

        function deleteusaha()
        {
            $id_usaha=$this->input->get('id_usaha');
            $var = $this->Model_usaha->getDatausahaById($id_usaha);
            unlink('assets/gambar/'.$var->gambar);
            $deleteusaha = $this->Model_usaha->delete_usaha($id_usaha);
            if($deleteusaha)
            {   
                
                $this->session->set_flashdata('Status','Delete Succes');
                redirect('Admin/Controllerusaha/Controller_usaha/getDatausaha');
            }
            else
            {
                $this->session->set_flashdata('Status','Delete Failed');
                redirect('Admin/Controllerusaha/Controller_usaha/tampilDatausaha');
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
                redirect('Admin/Controllerusaha/Controller_usaha/getDatausaha');
            }
        }
        
    }
?>