<?php 

    
    require_once ('functions.php');
    require_once ('db/connection.php');

    $user = NULL;
    if(is_logged_in()){

        $email= $_SESSION['user_email'];
        $sqlSelect = "SELECT * FROM user where user_email='$email'";
        $result = mysqli_query($link,$sqlSelect);
        $noOfRow = mysqli_num_rows($result);
        if($noOfRow){
            $user= mysqli_fetch_assoc($result);
            //printer($row,1);
            //return $row;
        }


        //echo "hiii";
        //exit();
    }
    else{
        $msg= "no user logged in";
        redirect("login.php",$msg);
    } 
    
    $current_userid=$user['user_id'];

//    printer($_FILES);
//    printer($_POST, true);

    if(isset($_POST['useremail'])) {

        $username= $_POST['username'];
        $useremail= $_POST['useremail'];
        $userphoto = NULL;
        $phone= $_POST['userphone'];
       // $password= md5($_POST['password']);
        $new_password= md5($_POST['new_password']);

        if(isset($_FILES['user_photo']) && $_FILES['user_photo']['error'] == 0) {
            $extension = strtolower(pathinfo($_FILES["user_photo"]["name"],PATHINFO_EXTENSION));
            $new_file_name = md5($_FILES["user_photo"]["name"] . random_int(100000, 999999)) . ".$extension";
            $target_file = "upload/" . $new_file_name;
            if (move_uploaded_file($_FILES["user_photo"]["tmp_name"], $target_file)) {
                $userphoto = $new_file_name;
            } else {
                $msg="Sorry, there was an error uploading your file.";
                redirect("edit_profile.php",$msg);
            }
        }
        
        $msg = "";
        if(!empty($username) && !empty($useremail) && !empty($phone) && !empty($_POST['new_password']) && !is_numeric($username) ){
            $sqlUpdate  = "UPDATE user SET user_name = '$username', user_email = '$useremail', user_phone = '$phone',user_password = '$new_password' ";
            if($userphoto != NULL) $sqlUpdate .= ",user_photo = '$userphoto' ";
            $sqlUpdate .= "WHERE user_id = '$current_userid'";
            $resultUpdate= mysqli_query($link,$sqlUpdate);
            
            
            $msg="Update Successful with new_password";
            if($userphoto != NULL) {
                $old_photo_path = 'upload/'.$user['user_photo'];
                unlink($old_photo_path);
            }
            safely_start_session();
            $_SESSION['user_email'] = $useremail;
            $_SESSION['user_name'] = $username;
            redirect("profile.php",$msg);
                         
            
        }
        else if(!empty($username) && !empty($useremail) && !empty($phone) && empty($_POST['new_password']) && !is_numeric($username) ){

            $sqlUpdate  = "UPDATE user SET user_name = '$username', user_email = '$useremail', user_phone = '$phone' ";
            if($userphoto != NULL) $sqlUpdate .= ",user_photo = '$userphoto' ";
            $sqlUpdate .= "WHERE user_id = '$current_userid'";

            $resultUpdate= mysqli_query($link,$sqlUpdate);
            $noOfRow = mysqli_num_rows($resultUpdate);
            //if($noOfRow){


            $msg='Update Successful.';
            if($userphoto != NULL) {
                $old_photo_path = 'upload/'.$user['user_photo'];
                unlink($old_photo_path);
            }
            safely_start_session();
            $_SESSION['user_email'] = $useremail;
            $_SESSION['user_name'] = $username;
            redirect("profile.php",$msg);
                /*
            }else {
                $msg="Update failed";
                print_r($msg) ;
                exit();
            } */
            
        }
        else{
            $msg='Please Enter valid information';
            redirect("edit_profile.php", $msg);
        }
        
            
        

        

    }


?>