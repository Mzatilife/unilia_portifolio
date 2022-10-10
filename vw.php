<?php
include "connect.php";

$connection = new establishConnection();
$connection->connect();
			
$id=$_GET['id'];
 $sql = "DELETE FROM posts WHERE id='$id'";
 $result = mysqli_query($connection->myConn, $sql);
 
 if($result){
	 echo '<script type="text/javascript">alert("Deleted Successfully!");window.location=\'index.php\';</script>';
 }else{
	 echo '<script type="text/javascript">alert("Failed to delete!");window.location=\'index.php\';</script>';
 }


?>