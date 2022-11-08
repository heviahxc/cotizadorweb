<?php

function get_view($view_name){
    $view = VIEWS.$view_name.'View.php';
if(!is_file($view)){
    die('La vista no existe');
}

require_once $view;
};