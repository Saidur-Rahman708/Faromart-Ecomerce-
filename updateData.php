<?php
include_once ("databaseConnect.php");
$result = mysqli_query($conn,"SELECT * FROM userdata");
?>
<!DOCTYPE html>
<html>
 <head>
   <title> Retrive data</title>
   <link rel="stylesheet" href="style.css">
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table>
	  <tr>
		<td>Name</td>
		<td>Email</td>
		<td>Password</td>
		<td>Address</td>
		<td>Action</td>
	  </tr>
			<?php
			
			$row = mysqli_fetch_assoc($result);
			?>
	  <tr>
	    
		<td><?php echo $row["userName"]; ?></td>
		<td><?php echo $row["userEmail"]; ?></td>
		<td><?php echo $row["userPassword"]; ?></td>
		<td><?php echo $row["userAddress"]; ?></td>
		<td><a href="updateProcess.php?id=<?php echo $row["id"]; ?>">Update</a></td>
      </tr>
</table>
 <?php
}
else
{
    echo "No result found";
}
?>
 </body>
</html>