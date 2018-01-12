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
        // INCLUDES
        $this->load->library("session");
        $this->assets->styleAssPublic();
        //END INCLUDES

/*
        $sessionUserID = $this->session->sessionId;
        echo "ID session =".$sessionUserID;
*/
        $this->load->view('admin/header',$dat);
        $this->load->view('admin/menu');
        $this->load->view('admin/content');
        $this->load->view('admin/editores/colorCss');

    }



}