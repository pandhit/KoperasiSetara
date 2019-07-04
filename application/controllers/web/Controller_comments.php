<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Controller_comments extends CI_Controller
    {
        //ini harus ada untuk load model
        function __construct() {
            parent::__construct();
            $this->load->model('Model_comments');
            
        }

        function getDatacomments()
        {
            $data['Usaha'] = $this->Model_comments->get_comments();
            $this->template->load('Template/Template_admin','Form_comments/Form_data_comments',$data);
        }

        function addComment()
        {    
                $comments = array (                                
                    'name'=>$this->input->post('Nama'),
                    'phone_number'=>$this->input->post('Phone'),
                    'email'=>$this->input->post('Email'),
                    'message'=>$this->input->post('Message')
                );  
            $addcomments= $this->Model_comments->add_comments($comments);          
            if($addcomments)
            {
                $this->session->set_flashdata('Status','Input Succes');   
                redirect('Kontak');         
            }
        }

        function viewFormEditcomments()
        {
            $id = $this->input->get('id_comments');
            $data['editcomments'] = $this->Model_comments->getDataUsahaById($id);           
            $this->template->load('Template/Template_admin','Form_comments/Form_edit_comments',$data);;
        }

        function editcomments()
        {
            $id_comments = $this->input->post('submitid');
            $comments = array (                                
                'nama_comments'=>$this->input->post('NamaUsaha'),
                'deskripsi'=>$this->input->post('Deskripsi')
            );  
            $editcomments= $this->Model_comments->update_comments($id_comments,$comments);
            if($editcomments)
            {   
            $this->session->set_flashdata('Status','Edit Succes');
            redirect('Admin/Controllercomments/Controller_comments/getDatacomments');
            }
            else
            {
            $this->session->set_flashdata('Status','Edit Failed');
            redirect('Admin/Controllercomments/Controller_comments/getDatacomments');  
            } 
        }

        function deletecomments()
        {
            $id_comments=$this->input->get('id_comments');             
            $deletecomments = $this->Model_comments->delete_comments($id_comments);
            if($deletecomments)
            {   
                
                $this->session->set_flashdata('Status','Delete Succes');
                redirect('Admin/Controllercomments/Controller_comments/getDatacomments');
            }
            else
            {
                $this->session->set_flashdata('Status','Delete Failed');
                redirect('Admin/Controllercomments/Controller_comments/tampilDatacomments');
            }
        }       
        
    }
?>