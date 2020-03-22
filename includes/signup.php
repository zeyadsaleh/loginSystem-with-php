<?php
require 'dbh.php';

$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$username = mysqli_real_escape_string($conn, $_POST['username']);
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
$hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (fname,lname,email,username,pwd) VALUES(?,?,?,?,?);";
//initializing the prepared statement
$stmt = mysqli_stmt_init($conn);
//validation for sql injections & for the empty fields
if (!mysqli_stmt_prepare($stmt, $sql) && !isset($_POST['submit'])) {
    header("Location:../Login_v13/Login_v13/signup.php?signup=error");
    exit();
} else {
    //check for empty filds

    if (empty($fname) || empty($lname) || empty($email) || empty($username) || empty($pwd)) {
        header("Location: ../Login_v13/Login_v13/signup.php?signup=empty");
        exit();
    } else {
        //see if the username has been taken
        $sql_u = "SELECT * FROM users WHERE username='$username'";
        $res_u = mysqli_query($conn, $sql_u);
        if(mysqli_num_rows($res_u) > 0){
            header("Location: ../Login_v13/Login_v13/signup.php?signup=taken_username&fname=$fname&lname=$lname&email=$email");
            exit();
        }
        //validate email
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location:../Login_v13/Login_v13/signup.php?signup=invalid_email&fname=$fname&lname=$lname&username=$username");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "sssss", $fname, $lname, $email, $username, $hashedpwd);
            mysqli_stmt_execute($stmt);
            header("Location: ../elit/elit/index.html?signup=success");
            
        }
    }
}
