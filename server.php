<?php
session_start();
$username = "";
$email = "";
$errors = array();

$db = mysqli_connect('localhost','root','','unilia');

if(isset($_POST['register'])){
	$username = mysql_real_escape_string($_POST['username']);
	$email = mysql_real_escape_string($_POST['email']);
	$password_1 = mysql_real_escape_string($_POST['password_1']);
	$password_2 = mysql_real_escape_string($_POST['password_2']);

if(empty($username)){
	array_push($errors, "Username is required");
}
if(empty($email)){
	array_push($errors, "Email is required");
}
if(empty($password_1)){
	array_push($errors, "Password is required");
}
if ($password_1 != $password_2) {
	array_push($errors, "The two passwords did not match");
}

if(count($errors) == 0){
	$password = md5($password_1);
	$sql = "INSERT INTO users (username,email,password) VALUES('$username','$email','$password') ";

	mysqli_query($db,$sql);
	$_SESSION['username'] = $username;
	$_SESSION['success'] = "you are logged in";
	header('location:manager.php');
}
}

if(isset($_POST['login'])){
	$username = @mysql_real_escape_string($_POST['username']);
	$password = @mysql_real_escape_string($_POST['password']);

if(empty($username)){
	array_push($errors, "Username is required");
}
if(empty($password)){
	array_push($errors, "Password is required");
}
if(count($errors)== 0){
$password = md5($password);
$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($db,$query);

if(mysqli_num_rows($result) == 1){
	$_SESSION['username'] = $username;
	$_SESSION['success'] = "you are logged in";
	header('location:manager.php');
}
else{
	
	echo'<script type = "text/javascript"> alert("username/password is invalid"); window.location = \'login.php\'; </script> ';
	
}
}


}

?>