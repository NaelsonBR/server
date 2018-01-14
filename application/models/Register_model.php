<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register_model extends CI_Model{

    function __construct()
    {
        parent::__construct();
    }

    //7 Info Parameter "cssdddd"
    public function createAccount($ac, $pw, $email, $access, $stat, $datCreate, $datLog)
    {
        $bool = false;
        $data = array(
            'account'      => $ac,
            'password'     => $pw,
            'email'        => $email,
            'access_level' => $access,
            'status'       => $stat,
            'data_create'  => $datCreate,
            'data_log'     => $datLog
        );

        try {
            $bool = true;
            $this->db->insert('user', $data);

        } catch (Exception $e) {

            return $bool = false;
        }

        return $bool;
    }

}