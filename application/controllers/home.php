<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

   function __construct(){parent::__construct();}

    public function index() {

        $dat = array(
            'title' => 'home'
        );

        //echo $this->preCreateAccount();     //For create a account
        helpDeleteAllRegister("user"); //For delete all register


        $this->load->view("header", $dat);
        $this->load->view("home", $dat);
        //$this->load->view("footer");

    }

    public function preCreateAccount(){
        $istModel = new register_model();
        return $istModel->createAccount(
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