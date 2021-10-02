<?php
require_once ('functions.php');	
	if (!empty($_POST)){
		require_once ('db/connection.php');
		$username= $_POST['username'];
        $useremail= $_POST['useremail'];
        $userphone= $_POST['userphone'];
        $usermsg= $_POST['usermsg'];
        
        date_default_timezone_set('Asia/Dhaka');
        $currentTime= date('Y-m-d H:i:s');
        $msg = "";

        if(!empty($username) && !empty($useremail) && !empty($userphone) && !empty($usermsg) && !is_numeric($username)){
            $sqlInsert= "INSERT INTO contact (name, email, phone, message , contact_date) VALUES ('$username' ,'$useremail','$userphone' , '$usermsg', '$currentTime')";
            $resultInsert= mysqli_query($link,$sqlInsert);
            $noOfRow = mysqli_num_rows($resultInsert);
            
            $msg='Message sent';
            redirect("contact.php",$msg);
                        
        }
        else{
            $msg='Please Enter all information';
            redirect("contact.php", $msg);
        }
        

	}
	else{
		$msg='Please Enter all information';
        redirect("contact.php", $msg);
	}

?>