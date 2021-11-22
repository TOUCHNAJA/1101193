<?php
    session_start();
    session_destroy();
    //setcookie("usercok", $usernamecok, time() - 86400,'/');
    header("Location: index.html", true, 301);
    exit();
?>