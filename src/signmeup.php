<?php
    ini_set('display_errors',0); // hide warning
    include("connectdb.php");

    $username = $_POST['usernams'];
    $emailadr = $_POST['emal'];
    $password = $_POST['passwd'];

    $sql_select = "SELECT * FROM poskacc WHERE username='$username'" or die("Error:" . mysqli_error($conn));
    $result = mysqli_query($conn, $sql_select);
    $cnt = 0;
    while($rs = mysqli_fetch_array($result)){
        $cnt++;
    }
    if($cnt == 0){
        $hshpass = hash('ripemd320', $password);
        $sql = "INSERT INTO poskacc (username, email, password) VALUES('$username', '$emailadr', '$hshpass')";
        $rs = mysqli_query($conn, $sql);
        header("Location: index.html", true, 301);
        exit();
    }
    else {
        // username already in use condition
        header("Location: index.html", true, 301);
        $alerter = 'This username already in use';
    }
?>