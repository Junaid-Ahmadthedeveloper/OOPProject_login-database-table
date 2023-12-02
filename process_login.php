<?php

include("./data.php");
session_start(); 
if(isset($_POST['submit'])) {
    $name =$_POST['name'];
    $email = $_POST['email'];

    $crudobj = new data();
    if ($crudobj->login($name, $email)) {
        header('Location: table.php');
        exit();
    } else {
        header('Location: login.php');
        exit();
    }
}