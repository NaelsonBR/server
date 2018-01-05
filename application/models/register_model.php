<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    //7 Parameter
    public function createAccount($ac,$pw,$email,$access,$stat,$datCreate,$datLog)
    {
        $data = array(
            'account'      => $ac,
            'password'     => $pw,
            'email'        => $email,
            'access_level' => $access,
            'status'       => $stat,
            'data_create'  => $datCreate,
            'data_log'     => $datLog
        );

        $this->db->insert('user',$data);
    }

}