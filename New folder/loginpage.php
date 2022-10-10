<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
	<div class="header">
<?php include('header.php'); ?>
	</div>
</head>
<body>
	<br/>
	<br/>
	
	<div class="container">
		<img src="images/sample.png " class="img-circle" alt="Cinque Terre" width="200" height="136">
	
		<h4> <center>please login first!</center></h4>
<form>
	
	
		<div class = "form-group">
	<label>Name</label>
	<input type="text" name="name" class="form-control" required = "required" size="50%"   >
</div>
<div class = "form-group">
	<label>Password</label>
	<input type="password" name="password" class="form-control" required="required">
</div>
	<input type="submit" name="submit" class="btn btn-primary" value="Login">



</form>
</div>
</div>
</body>
</html>