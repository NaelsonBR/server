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




        if( $this->session->userdata('logged_in') == true AND $this->session->userdata('acc_level') == 1){ // Protection


            $this->load->view('admin/header',$dat);
            $this->load->view('admin/menu');
            $this->load->view('admin/content');
            $this->load->view('admin/editores/colorCss');


        }
        else {

            echo "<h1 class='text-center text-secondary'>Você não tem permissão para acessar esta area!</h1>";
            header("Refresh: 2; login");
            show_404();

        }

    }

    public function leave(){
        $this->load->library("session");


           if( $this->session->userdata('logged_in') == true ){
               echo "asas";

               if ( $this->session->unset_userdata('logged_in') == 0)
                redirect('admin/login');
               else{
                   echo "<h1 class='text-center text-secondary'>Sessão inicializada!</h1>";
                   show_404();
               }


        }else {

               redirect('admin/login');
             }

    }

}