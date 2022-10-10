 <!DOCTYPE html>
 <html>
 
 <head>
 <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
 <link href = "style.css" type = "text/css" rel = "stylesheet">
	<title> image upload</title>
		
	
	<link rel="Stylesheet" href="css-main/bootstrap.css" />
		<link rel="Stylesheet" href="css-main/bootstrap-theme.css" />
		<link rel="Stylesheet" href="css-main/w3.css" />
		<link href="bootstrap/bootstrap.css" rel="stylesheet" type="text/css" />
		<link href="bootstrap/bootstrap-theme.css" rel="stylesheet" type="text/css" />
		<link href="bootstrap/bootstrap.css" rel="stylesheet" type="text/css"/>



		<link rel="Stylesheet" href="css-main/bootstrap.css" />
		<link rel="Stylesheet" href="css-main/bootstrap-theme.css" />
		<link rel="Stylesheet" href="css-main/w3.css" />
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
		<link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
</head>
<body>

		
			

<div id = "content">

			
			
			
<div class = "container" >

<div class = "panel panel-success" style="background-color: grey;">
<div class = "panel-heading"> News Feeds </div>








<?php 
	
		$db = mysqli_connect("localhost", "root", "", "unilia");
		$sql = "SELECT * FROM posts ORDER BY id DESC";
		$result = mysqli_query($db, $sql);
		while ($row = mysqli_fetch_array($result)){

echo "<p><ol class='breadcrumb'>
<li class ='active'><strong>Published By</strong></li></li> <li class='active'></li>".$row['author']."

 </ol></p>";


		echo "<div id = 'img_div'>";

		echo "<div class='container'>
							<div class = 'row'>
								<div class = 'col-md-4'>
							<a href='#''><img class='img-rounded' src='online/images/".$row['image']."'  alt = 'Cinque Terre'width='304' height = '256'>
								



							</a>
							
							<div class='blog-text'>
							</div> 
						</div>
					</div>";
	
		ECHO "<br/>";
		echo "<p style= 'color:white;'>".$row['text']. "</p>";
		

		echo" 
	<form class = 'form-group'>
		<div>
		<textarea name = 'comments' id = 'commemts'  style = 'font-family:sans-sarif;font-size:1.5em;height:80px;'>
		Say ....
		</textarea> 
		
		</div>     
		   <input type = 'submit' class = 'btn btn-primary btn-sm'value ='comment'>
		</form>";
		ECHO "<br/>";
		ECHO "<br/>";
		
	




		echo "</div>";

		

}


?>

				</div>
				</div>
</div>
</div>
</div>






</body>
</html>




<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link href = "bootstrap/css/bootstrap.css" rel="stylesheet" style="text/css">
</head>
<body  style = "background-color: grey;">
	<div class = "header">
			<?php require('logo.php'); ?>
		</div>
	<div class = "header">
			<?php require('navbar.php'); ?>
		</div>
<div>
	<?php
	include("connect.php");
	
	$select_post = "select * from posts order by id desc";

	$run_posts = mysql_query($select_post);

	while ($row=mysql_fetch_array($run_posts)) {

		$Title = $row['title'];
		$Author = $row['author'];
		$Date = $row['date'];
		$Keyword = $row['keyword'];
		$Image = $row['image'];
		$Content = $row['content'];
		
	
	 ?>

	
<h2><?php echo $Title;?></h2>
<p align="left">Published on: <i><?php echo $Date; ?></i></p>
<p align="right">Posted by: <i><?php echo $Author; ?></i></p>
<center><img src="images/<?php echo $Image; ?>" width="250" height="250"></center>
<p align="justify"><?php echo $Content; ?></p>
<?php } ?>
</div>


</body>
</html> 