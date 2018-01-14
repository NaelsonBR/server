<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

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

        //END INCLUDES




        if( $this->session->userdata('logged_in') == true AND $this->session->userdata('acc_level') == 1){

            $this->load->view('admin/Header',$dat);
            $this->load->view('admin/Menu');
            $this->load->view('admin/Content');
            $this->load->view('admin/editores/ColorCss');


        }
        else {


            log_message('error','conta não possui permissão para logar');
            show_404("error_404");

        }

    }

    public function leave(){

        $this->load->library("session");

        if( $this->session->unset_userdata('logged_in') == 0)
            redirect('admin/login');
        else {
            show_404("error_404");
        }
    }

}