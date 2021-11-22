<?php
    ini_set('display_errors',0); // hide warning
    include("connectdb.php");

    $logname = $_POST['logname'];
    $password = $_POST['logpass'];

    $hshpass = hash('ripemd320', $password);
    // echo $hshpass;
    $sql = "SELECT * FROM poskacc WHERE username ='$logname' AND password = '$hshpass'";
    $result = mysqli_query($conn, $sql);
    $cnt = 0;
    // echo "3";
    while($rs = mysqli_fetch_array($result)){
        $cnt++;
        // echo "2";
    }
    if ( $cnt == 1 ) {
        // echo "this mean correct";
        $cokvar = $logname;
        setcookie("usercok", $cokvar, time()+ 86400,'/');
        header("Location: Snake.php", true, 301);
    }
    else {
        // incorrect condition
        // echo "another fault";
        header("Location: index.html", true, 301);
    }
?>