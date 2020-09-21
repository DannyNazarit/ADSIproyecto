<?php
    //error_reporting(0);
    $mysqli = new mysqli('localhost', 'root', '', 'base de datos sme');

    if($mysqli->connect_error){
        header("Location: error.php");
    }
?>