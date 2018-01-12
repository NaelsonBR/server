<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller{

    public function index(){

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


            $bool =  $this->check->validation($arr['email'],$arr['password']); //Validando

            if ($bool == true){

                $arrMsg = array(
                    'successInfo'       => 'Login successful'
                );


                $this->load->library("session");
                $arrSession = array(
                    'logged_in' =>      true,
                    'id' =>             $this->check->getId($arr['email']),
                    'acc_level' =>      $this->check->getLevel($arr['email'])
                );


                $this->session->set_userdata($arrSession);
                $this->load->view('admin/login',$arrMsg);
                header("Refresh: 1; logged");

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