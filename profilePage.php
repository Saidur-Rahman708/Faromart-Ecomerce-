<?php
include("loginProcess.php");
$custName = $cusEmail = $cusAddress ="";
$sql = "SELECT * FROM userdata WHERE userEmail='$user_email' AND userPassword='$user_pass'";
$answer = mysqli_query($conn,$sql);
if(mysqli_num_rows($answer)>0){
    $information =  mysqli_fetch_assoc($answer);
    $custName = $information['userName'];
    $cusEmail = $information['userEmail'];
    $cusAddress = $information['userAddress'];
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FARO MART</title>
  <link rel="shortcut icon" type="image" href="https://w7.pngwing.com/pngs/285/737/png-transparent-e-commerce-computer-icons-online-shopping-service-shopping-cart-miscellaneous-computer-network-angle.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="profilePage.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Grape+Nuts&display=swap" rel="stylesheet">

</head>

<body>
  <div class="contan">
     
  <!-- NAV START -->
  <div class="nav1">

    <div class="logo">
      <h1>FARO MART</h1>
    </div>
    <div class="button">
      <a class="but" href="logOut.php">Logout</a>
    </div>
</div>
<div class="header">
    <h1>Profile information</h1>
</div>
<div class="dataPresentPart">
    <p>Name: <?php echo $custName; ?></p>
    <p>Email: <?php echo $cusEmail; ?> </p>
    <p>Address: <?php echo $cusAddress; ?> </p>
    
</div>

<div class="lastPart">

    <div class="delete">
    <div class="button">
      <a class="but" href="delete.php">Delete Account</a>
    </div>
    </div>

    <div class="update">
    <div class="button">
      <a class="but" href="updateData.php">Update Account</a>
    </div>
    </div>
</div>

</body>

</html>