<?php  
/** 
 * Created by PhpStorm. 
 * User: Ehtesham Mehmood 
 * Date: 11/24/2014 
 * Time: 11:55 PM 
 */  
include("databaseConnect.php");  
$delete_id=$_GET['userEmail'];  
$delete_query="DELETE FROM userdata WHERE userEmail='$delete_id'"; 
$run=mysqli_query($conn,$delete_query);  
if($run)  
{  
    header("Location: index.php");
}
  
?> 