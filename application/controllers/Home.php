<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{


    function __construct()
    {

        // $this->obHelp = new func();
        parent::__construct();
    }

    public function index()
    {
        $dat = array(
            'title' => 'Pagina inicial'
        );

        $istModel = new register_model();
        /*
        $istModel->createAccount("naelson","123","naelson.g.saraiva@gmail.com",
        1
        ,
         "0"
        ,
        "05/01/2018"
        ,
          "05/01/2018-17:15");
        */
        helpDeleteAllRegister("user");


        $this->load->view("header", $dat);
        $this->load->view("home", $dat);
        //$this->load->view("footer");

    }

}