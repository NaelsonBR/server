<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller{

    function __construct()
    {

        parent::__construct();
    }

    public function index(){
        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/content');

    }

    public function loginDashboard(){
        $stylesheet = new assets();
        $stylesheet->styleAssPublic();

        $this->load->view('admin/login');
    }


}