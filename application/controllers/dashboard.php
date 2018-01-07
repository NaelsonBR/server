<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller{

    function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $dat = array(
            'title' => 'DashBoard'
        );
        $stylesheet = new assets();
        $stylesheet->styleAssPublic();

        $this->load->view('admin/header',$dat);
        $this->load->view('admin/menu');
        $this->load->view('admin/content');

    }

    public function loginDashboard(){
        $dat = array(
            'title' => 'login'
        );

        $stylesheet = new assets();
        $stylesheet->styleAssPublic();
        $this->load->view('admin/login',$dat);

    }


}