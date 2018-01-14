<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

   function __construct(){parent::__construct();}

    public function index() {

        $dat = array(
            'title' => 'Home'
        );

        //echo $this->preCreateAccount();     //For create a account
        //helpDeleteAllRegister("user"); //For delete all register


        $this->load->view("Header", $dat);
        $this->load->view("Home", $dat);
        //$this->load->view("footer");

    }

    public function preCreateAccount(){

        $this->load->model('Register_model');

        return $this->register_model->createAccount(
            "naelson"
            ,
            '123'
            ,
            "naes5n.g.saraiva@gmail.com",
            1
            ,
            "0"
            ,
            "05/01/2018"
            ,
            "05/01/2018-17:15");
    }

}