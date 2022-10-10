<?php
session_start();


	
	require 'connect.php';
	
	$connection = new establishConnection();
	$connection->connect();
	
	$id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
    <head>
		<link href="../bootstrap/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="../bootstrap/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
		<link href="../bootstrap/dist/css/sb-admin-2.css" rel="stylesheet">
		<link href="../bootstrap/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<title>student profile</title>
	</head>

	<body>
	 

		<div id="wrapper">

			<div id="page-wrapper">
				<div class="row">
					<div class="col-lg-12">
					   <h2 class="page-header">Change Username and Password</h2>
					</div>
				</div> 
				<div class = "container">
			
					<?php
						$query = mysqli_query($connection->myConn, "SELECT * FROM posts WHERE id = '$id' ");
						$rows = mysqli_fetch_array($query);
					?>

					<h3 class="h3"> UPDATE YOUR DETAILS </h3>
			
					<div class = "col-lg-12">
						<form  method="POST" action="studupdate.php" class="form form-horizontal">
						<input name="student_id" type="hidden" class = "form-control" value = "<?php echo @$rows['id']; ?>" />
												
						<div class = "form-group">
							<div class = "col-md-3"></div>
							<label for="username" class = "col-md-2 control-label">Username:</label>
							<div class="col-md-3">
								<input name="username" type="text" class = "form-control" value = "<?php echo @$rows['username']; ?>" />
							</div>
						</div>
						<div class = "form-group">
							<div class = "col-md-3"></div>
							<label for="password" class = "col-md-2 control-label">Password :</label>
							<div class="col-md-3">
								<input name="password" type="password" class = "form-control" value = "********" />
							</div>
						</div>
						
						
						<div class = "form-group" id = "button">
							<div class = "col-md-4"></div>
							<div class = "col-md-4">
								<input name="update" type="submit" value="Update" id="update" class="btn btn-warning" />
								<input name="reset" type="reset" value="Clear" id="clear" class="btn btn-danger" />
								</div>
							</div>
						</div>
						</form>
				</div>
				
			</div>
</body>
</html>