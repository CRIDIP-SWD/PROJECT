<?php
session_start();
require 'app/classe.php';
App\autoloader::register();


if(isset($_GET['view']))
{
    $view = $_GET['view'];
}else{
    $view = "index";
}