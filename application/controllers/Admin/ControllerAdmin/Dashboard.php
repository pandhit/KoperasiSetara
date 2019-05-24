<?php 
 defined('BASEPATH') OR exit('No direct script access allowed');
 class Dashboard extends CI_Controller{

     /**
     * Class constructor.
     */
    function __construct() {
        parent::__construct();
    }
    
    function index()
    {
    
        $this->template->load('Template/Template_admin','Form_admin/dashboard');
    }
 }
?>