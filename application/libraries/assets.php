<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * Author naelson.g.saraiva@gmail.com
 * 06/01/2018
 * Library for include
 */
class assets {
    function __construct(){}
    public function styleAssPublic(){

        $css = array(
            'bootstrap' => '<link rel="stylesheet" href="'. base_url("assets/css/bootstrap.min.css").'";>',
            'dashboard' => '<link rel="stylesheet" href="'. base_url("assets/css/style-dashboard.css").'";>',
            'public'    => '<link rel="stylesheet" href="'. base_url("assets/css/style-public.css").'";>',
            'icons'    => '<link rel="stylesheet" href="'. base_url("assets/css/font-awesome.min.css").'";>'

        );

        $js = array(
            'jquery'    => '<script type="text/javascript" src="'. base_url("assets/js/jquery-3.2.1.js").'"></script>',
            'bootstrap' => '<script type="text/javascript" src="'. base_url("assets/js/bootstrap.min.js").'"></script>',
            'global'    => '<script type="text/javascript" src="'. base_url("assets/js/global.js").'"></script>',
            'icons'     => '<script src="https://use.fontawesome.com/77aee86c6a.js"></script>'

        );

        $url = array(
            'icon' => '<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">',
            'css'  => $css['bootstrap'].$css['dashboard'].$css['icons'],
            'js'   => $js['jquery'].$js['bootstrap'].$js['global'].$js['icons']
        );


        // Position for loading 1 css, 2 js, 3 icon
        echo $url['css'].$url['js'].$url['icon'];

    }

}