<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function createAccount($ac,$pw){
        $data = array(
            'account'=>$ac,
            'password'=>$pw

        );

        $this->db->insert('user',$data);
   }

}