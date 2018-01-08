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

    public function getId(){

        $result = $this->db->select('id')
          ->from('user')
          ->where('email', 'naelson.g.saraiva@gmail.com')->get();

        $id = 0;
        foreach ($result->result_array() as $row) {
            // result();
            // $row->id
            $id =  $row['id']; // Array de objetos
        }

      return $id;
    }

}