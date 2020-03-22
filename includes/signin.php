<?php
    require 'dbh.php';

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);


    $sql = "SELECT * FROM users WHERE username='$username';";
    $res = mysqli_query($conn, $sql);
    if(empty($username) || empty($pwd)){
        header("Location:../Login_v5/Login_v5/signin.php?signin=empty");
        exit();
    }
    if (mysqli_num_rows($res) == 0) {
        header("Location:../Login_v5/Login_v5/signin.php?signin=usenamenotexsited");
        exit();
    } else {
        $sql = "SELECT pwd FROM users WHERE username='$username';";
        $res = mysqli_query($conn, $sql);
        $hashedpwd = mysqli_fetch_assoc($res)['pwd'];
        if(password_verify($pwd, $hashedpwd) == 0){
            header("Location:../Login_v5/Login_v5/signin.php?signin=wrongpassword");
            exit();
        }
        else{
            header("Location: ../elit/elit/index.html?signin=success");
        }
    }
    ?>