<?php

class dashboard extends CI_Controller
{
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
        $this->load->view('admin/login');
    }


}