<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function changeLanguage()
{


}

//Function for delete all register;
function helpDeleteAllRegister($TABLE)
{
    $ci = get_instance();
    $sql = "DELETE FROM $TABLE";
    $ci->db->query($sql);
}
