<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class assets {
    function __construct(){}
    public function styleAssPublic(){

        $css = array(
            'bootstrap' => '<link rel="stylesheet" href="'. base_url("assets/css/bootstrap.min.css").'";>',
            'dashboard' => '<link rel="stylesheet" href="'. base_url("assets/css/style-dashboard.css").'";>',
            'public'    => '<link rel="stylesheet" href="'. base_url("assets/css/style-public.css").'";>'
        );

        $js = array(
            'bootstrap' => '<script type="text/javascript" src="'. base_url("assets/js/bootstrap.min.js").'"></script>',

        );

        $url = array(
            'icon' => '<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">',
            'css'  => $css['bootstrap'].$css['dashboard'].$css['public'],
            'js'   => $js['bootstrap'],
        );

        echo $url['icon'].$url['css'].$url['js'];


        //CSS
        //echo '<link rel="stylesheet" href="'. base_url("assets/css/bootstrap.min.css").'";>';
        //echo '<link rel="stylesheet" href="'. base_url("assets/css/style-dashboard.css").'";>';
        //echo '<link rel="stylesheet" href="'. base_url("assets/css/style-public.css").'";>';
        //echo '<link rel="stylesheet" href="'. base_url("assets/css/style-public.css").'";>';

        //JAVASCRIPT
        //echo'<script type="text/javascript" src="'. base_url("assets/js/bootstrap.min.js").'"></script>';


    }

}