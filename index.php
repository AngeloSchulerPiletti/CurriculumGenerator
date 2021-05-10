<?php 

if($_SERVER['REQUEST_URI'] != "/" && $_SERVER['REQUEST_URI'] != "/Inicio"){
    require 'public/error404.php';
}else{
    require 'public/home.php';
}