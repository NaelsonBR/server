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

    }

    public function loginDashboard(){
        //Includes

        $this->assets->styleAssPublic();

        $this->load->language('pt-br','brasilian');

        $this->load->library("session");
        $this->load->helper('form');
        $this->load->library('form_validation');

        //End includes

        $dat = array(
            'title' => 'login'
        );

		$rules = array(
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required'

            ),

            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required'

            ),
        );

        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('admin/login',$dat);
        }
        else
        {
            $this->load->model('accountCheck_Model','check');

            $arr = array(
                'email'    => $this->input->post('email'),
                'password' => $this->input->post('password')
            );


           $bool =  $this->check->validation($arr['email'],$arr['password']);

           if ($bool == true){

               $arr = array(
                   'successInfo'    => 'Login successful',
                   'sessionId'      => $this->check->getId()
               );

               $this->session->sessionId = $arr["sessionId"];
               $this->load->view('admin/login',$arr);
               header("Refresh: 1; online");
           }
           else{
               $arr = array(
                   'errInfo'    => 'Senha incorreta, tente novamente'

               );

               $this->load->view('admin/login',$arr);

           }

        }

    }


}