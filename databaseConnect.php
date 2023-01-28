<?php

$dbHostName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "customerinformation";

$conn = mysqli_connect($dbHostName,$dbUserName,$dbPassword,$dbName);

if($conn){
    echo "sucess";
}
else{
    die("Connection failed: " . mysqli_connect_error());
}
?>


