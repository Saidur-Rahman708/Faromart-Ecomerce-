<?php
 include("databaseConnect.php");
 session_start();

 $user_email = $user_pass="";
 $user_email_er = $user_pass_er="";
  function clearn_data($data){
      $data = trim($data);
      $data = htmlspecialchars($data);
      $data = stripslashes($data);
      return $data;
  }
 if($_SERVER['REQUEST_METHOD']=="POST"){
    $user_email = clearn_data($_POST['email']);
    $user_pass = clearn_data($_POST['pass']);
    if(empty($user_email)){
        $user_email_er = "Email can not be empty";
    }
    else{
        if(!filter_var($user_email, FILTER_VALIDATE_EMAIL)){
            $user_email_er = "Please Enter Valid Email Address.";
        }
    }
    if(empty($user_pass)){
        $user_pass_er = "Password cannot be empty";
    }
    if(empty($user_email_er) && empty($user_pass_er)){
        $query = "SELECT * FROM userdata WHERE userEmail='$user_email' AND userPassword='$user_pass' limit 1";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result)>0){
            $data = mysqli_fetch_assoc($result);
            if($data['userPassword']==$user_pass){
                $_SESSION['userEmail']=$user_email;
                header("Location: afterLoginHomePage.php");
                die;
            }
        }
    }
    else{
        echo "please Enter Valid information";
    }
}