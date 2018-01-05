<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function display()
{
    echo "Ola sou uma function";
}

//Function for delete all register;
function helpDeleteAllRegister($table)
{
    $ci = get_instance();
    $sql = "DELETE FROM $table";
    $ci->db->query($sql);
}
