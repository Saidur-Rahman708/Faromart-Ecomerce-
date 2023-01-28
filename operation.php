<?php

  include_once('databaseConnect.php');

    
  $user_name = $user_email = $user_password = $user_address = $checked = "";
  $user_name_err = $user_email_err = $user_password_err = $user_address_err = $checked_err = "";
      // if(isset($_POST['save'])){
        // if($_SERVER['REQUEST_METHOD']=="POST"){
            function clearn_data($data){
                $data = trim($data);
                $data = htmlspecialchars($data);
                $data = stripcslashes($data);
                return $data;
            }
            if($_SERVER['REQUEST_METHOD']=="POST"){
            $user_name = clearn_data($_POST['name']);
            $user_email = clearn_data($_POST['email']);
            $user_password = clearn_data($_POST['password']);
            $user_address = clearn_data($_POST['address']);
            
            if(empty($user_name)){
                $user_name_err = "Name can not be empty";
            }
            else{
                if(!preg_match("/^[a-zA-Z-'\s]+$/", $user_name)){
                    $user_name_err = "Name can only contains letters.";
                }
            }
            if(empty($user_email)){
                $user_email_err = "Email can not be empty";
            }
            else{
                if(!filter_var($user_email, FILTER_VALIDATE_EMAIL)){
                    $user_email_err = "Please Enter Valid Email Address.";
                }
            }
            if(empty($user_password)){
                $user_password_err = "Password cannot be empty";
            }
            if(empty($user_address)){
                $user_address_err = "Email can not be empty";
            }
            else{
                if(!preg_match("/^[a-zA-Z-'\s]+$/", $user_address)){
                    $user_address_err = "Name can only contains letters.";
                }
            }
            if(empty($checked)){
                $checked_err = "agree the term and condition";
            }
        
            if(empty($user_name_err) && empty($user_email_err) && empty($user_password_err) && empty($user_address_err) && empty($checked_err)){
                $sql = "INSERT INTO userdata(userName,userEmail,userPassword,userAddress) 
                VALUES('$user_name','$user_email','$user_password','$user_address')";
                if(mysqli_query($conn,$sql)){
                    
                    header("Location: afterLoginHomePage.php");
                }
                else{
                    echo "Error: " . $sql . " " . mysqli_error($conn);
                }
                mysqli_close($conn);
            }

            else{
                header("Location: signup.php");
                
            }
        
    }
        
?>