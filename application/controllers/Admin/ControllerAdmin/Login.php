<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller{

    /**
     * Class constructor.
     */
    function __construct() {
        parent::__construct();
        $this->load->model('Model_admin');
        
    }

    function index()
    {
        if(isset($_SESSION['Admin']))
        {
            redirect('Admin/ControllerAdmin/Dashboard');
        }
        else
        {
            $this->load->view('Form_admin/login');
        }
    }

    function login()
    {
        $username = $_POST['Username'];
        $password = $_POST['Password'];
        $getAdmin = $this->Model_admin->get_admin_by_user_password($username,$password);
        if($getAdmin)
        {
            $this->session->set_userdata('Admin',$getAdmin);
            redirect('Admin/ControllerAdmin/Dashboard');
        }
        else
        {
            $this->session->set_flashdata('Error','Username and Password Incorect');
            redirect('Admin/ControllerAdmin/Login');
        }
    }


    function logout()
    {
        session_destroy();
        redirect('Welcome');
    }
}
?>