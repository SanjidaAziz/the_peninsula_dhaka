<?php 

    
    require_once ('functions.php');
    require_once ('db/connection.php');

        
    if(is_logged_in()){

        $email= $_SESSION['user_email'];
        $sqlSelect = "SELECT * FROM user where user_email='$email'";
        $result = mysqli_query($link,$sqlSelect);
        $noOfRow = mysqli_num_rows($result);
        if($noOfRow){
            $row= mysqli_fetch_assoc($result);
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
    
    $current_userid=$row['user_id'];

    
    if(isset($_POST['useremail'])) {

        //email, password
   
        $username= $_POST['username'];
        $useremail= $_POST['useremail'];
        $phone= $_POST['userphone'];
        $password= md5($_POST['password']);
        $new_password= md5($_POST['new_password']);
        
        $msg = "";
        if(!empty($username) && !empty($useremail) && !empty($phone) && !empty($password) && !empty($new_password) && !is_numeric($username) ){
            $sqlUpdate= "UPDATE user SET user_name = '$username', user_email = '$useremail', user_phone = '$phone',user_password = '$new_password' WHERE user_id = $current_userid";  
            $resultUpdate= mysqli_query($link,$sqlUpdate);
            
            
            $msg="Update Successful with new_password";
            redirect("profile.php",$msg);
                         
            
        }
        else if(!empty($username) && !empty($useremail) && !empty($phone) && !empty($password) && empty($new_password) && !is_numeric($username) ){
            $sqlUpdate= "UPDATE user 
                         SET user_name = '$username',
                             user_email = '$useremail',
                             user_phone = '$phone',
                             user_password = '$password'
                        WHERE user_id = $current_userid";  
            $resultUpdate= mysqli_query($link,$sqlUpdate);
            $noOfRow = mysqli_num_rows($resultUpdate);
            //if($noOfRow){


                $msg='Update Successful.';
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