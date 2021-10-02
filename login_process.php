<?php
require_once ('functions.php');

if(isset($_POST['useremail'])) {
    require_once ('db/connection.php');
    //email, password
    $email= $_POST['useremail'];
    $password= md5($_POST['password']);

    $sql= "SELECT * FROM user WHERE user_email='$email'";

    $result= mysqli_query($link,$sql);

    $noOfRow = mysqli_num_rows($result);

    $msg = "";
    if($noOfRow){
        $row = mysqli_fetch_assoc($result);
        if($password == $row['user_password'] && $row['status']==1){
            $msg="Login Successful";
            log_in_user($row);
            redirect("index.php", $msg);

        }
//        else if($password == $row['user_password'] && $row['status'] !=1){
//            if ($row['status'] ==2) $msg="Email verification needed";
//            else if($row['status'] ==3){
//                $msg="Your account has been stopped. contact with Admin";
//            }
//        }
        else if($password != $row['user_password']){
            $msg= "Wrong password";
        } else $msg ="Something went wrong";
    } else {
        $msg ="You don't have an account, please sign up first";
    }
    redirect("login.php", $msg);
}

function log_in_user($row) {
    safely_start_session();
    $_SESSION['user_name'] = $row['user_name'];
    $_SESSION['user_email'] = $row['user_email'];
    $_SESSION['user_status'] = $row['status'];
}