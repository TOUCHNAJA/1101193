<?php
    $hostName = "db";
    $userName = "root";
    $passWord = "123456";
    $dbName = "popsnkdb";
    $conn = mysqli_connect($hostName, $userName, $passWord, $dbName);
    if (mysqli_connect_error()) {
    echo "Connect falied : " .mysqli_connect_error();
    }
    else {
     //echo "Connect Successfully." ;
    }
?>