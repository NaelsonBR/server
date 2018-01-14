<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class accountCheck_Model extends CI_Model {
       function __construct()
       {
           parent::__construct();
       }

    public function validation($EMAIL,$PASSWORD){

         $this->db->where(array('email'=>$EMAIL,'password'=>$PASSWORD));

         $query = $this->db->get("user");

         if ($query->num_rows() > 0){
                   return true;
         } else
             return false;

     }

    public function getId($ac){

        $result = $this->db->select('id')
          ->from('user')
          ->where('email', $ac)->get();

        $id = 0;
        foreach ($result->result_array() as $row) {
            // result();
            // $row->id
            $id =  $row['id']; // Array de objetos
        }

      return $id;
    }

    //Retorna acesso de livel administrador
    public function getLevel($ac){
        $result = $this->db->select('access_level')
            ->from('user')
            ->where('email', $ac)->get();

        $lv = 0;

        foreach ($result->result_array() as $row) {
            $lv =  $row['access_level'];
        }

        return $lv;
    }

}