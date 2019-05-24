<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Controller_alat extends CI_Controller
    {
        //ini harus ada untuk load model
        function __construct() {
            parent::__construct();
            $this->load->model('Model_alat');
            
        }

        function getDataAlat()
        {
            $data['alat'] = $this->Model_alat->getDataAlat();
            $this->template->load('Template/Template_admin','Form_alat/Form_data_alat',$data);
        }

        function addAlat()
        {
                $alat = array (
                    'Name' =>$this->input->post('name'),
                    'Category_id'=>$this->input->post('category_id'),
                    'Number_of_rack'=>$this->input->post('number_of_rack')
                );
            $addalat= $this->Model_alat->insertDataAlat($alat);
            if($addalat)
            {
                $this->session->set_flashdata('Status','Input Succes');
                redirect('ControllerAlat/ControllerAlat/getDataAlat');
            }
        }

        function viewFormEditAlat()
        {
            $id = $this->input->get('id_alat');
            $data['editalat'] = $this->Model_alat->getDataAlatById($id);
            $this->template->load('Template/Template_admin','Form_alat/Form_edit_alat',$data);;
        }

        function editAlat()
        {
            $id_alat = $this->input->post('submitid');
            $alat = array(
                            'Name'=>$this->input->post('name'),
                            'Category_id'=>$this->input->post('category_id'),
                            'Number_of_rack'=>$this->input->post('number_of_rack'),
                            );
            $editalat= $this->Model_alat->update_karyawan($id_alat,$alat);
            if($editalat)
            {   
            $this->session->set_flashdata('Status','Edit Succes');
            redirect('ControllerAlat/ControllerAlat/getDataAlat');
            }
            else
            {
            $this->session->set_flashdata('Status','Edit Failed');
            redirect('ControllerAlat/ControllerAlat/getDataAlat');  
            } 
        }

        function deleteAlat()
        {
                $id_alat=$this->input->get('id_alat');
            $deletealat = $this->Model_alat->delete_alat($id_alat);
            if($deleteAlat)
            {   
                $this->session->set_flashdata('Status','Delete Succes');
                redirect('ControllerAlat/ControllerAlat/getDataAlat');
            }
            else
            {
                $this->session->set_flashdata('Status','Delete Failed');
                redirect('ControllerAlat/ControllerAlat/tampilDataAlat');
            }
        }
        
    }
?>