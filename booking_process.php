<?php
require_once ('functions.php');
	if (!empty($_POST)){
		require_once ('db/connection.php');
		$name= $_POST['name'];
        $email= $_POST['email'];
        $phone= $_POST['phone'];
        $room_type=$_POST['room_type'];
        $adult=$_POST['adult'];
        $child=$_POST['child'];
        $checkin= $_POST['checkin'];
        $checkout= $_POST['checkout'];
        $room_type= $_POST['room_type'];
       
        date_default_timezone_set('Asia/Dhaka');
        $currentTime= date('Y-m-d H:i:s');
        //echo $currentTime;
        $msg = "";

        
        $sqlInsert= "INSERT INTO booking (name, email, phone, room_type , checkin, checkout, no_of_adult, no_of_child, booking_date) VALUES ('$name' ,'$email','$phone' , '$room_type', '$checkin', '$checkout', '$adult', '$child' ,'$currentTime')";
        $resultInsert= mysqli_query($link,$sqlInsert);
        $noOfRow = mysqli_num_rows($resultInsert);
        
        //if(noOfRow)
        $msg='Resevation placed. Wait for confirmation mail';
        redirect("services.php",$msg);
                       
	}
	else{
		$msg='Please Enter all information';
        redirect("services.php", $msg);
	}
	// exit();

?>