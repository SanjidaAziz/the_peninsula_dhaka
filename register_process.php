<?php
require_once ('functions.php');

if(isset($_POST['useremail'])) {
    require_once ('db/connection.php');
    //email, password

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $username= $_POST['username'];
        $useremail= $_POST['useremail'];
        $phone= $_POST['userphone'];
        $password= md5($_POST['password']);
        $status=1;
        date_default_timezone_set('Asia/Dhaka');
        $currentTime= date('Y-m-d H:i:s');
        $msg = "";
        if(!empty($username) && !empty($useremail) && !empty($phone) && !empty($password) && !is_numeric($username)){
            $sqlInsert= "INSERT INTO user (user_name, user_email, user_phone, user_password,status,created_date) VALUES ('$username' ,'$useremail','$phone' , '$password',$status,'$currentTime')";
            $resultInsert= mysqli_query($link,$sqlInsert);
            $noOfRow = mysqli_num_rows($resultInsert);
            
            $msg='Register Successful.';
            redirect("login.php",$msg);
            
        }
        else{
            $msg='Please Enter valid information';
        }
        redirect("register.php", $msg);
        
    

    }

}
?>