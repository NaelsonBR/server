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
            'title' => 'Home'
        );

        $this->preCreateAccount();
        //helpDeleteAllRegister("user");


        $this->load->view("header", $dat);
        $this->load->view("home", $dat);
        //$this->load->view("footer");

    }

    public function preCreateAccount(){
        $istModel = new register_model();
        $istModel->createAccount(
            "naelson"
            ,
            encrypt('124456')
            ,
            "naelson.g.saraiva@gmail.com",
            1
            ,
            "0"
            ,
            "05/01/2018"
            ,
            "05/01/2018-17:15");
    }

}