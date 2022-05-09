<?php
session_start();

if($_SESSION["logueado"] != 1){
    header("location: login.html");
    exit();
}
echo $_COOKIE["nombreCookie"];


?>