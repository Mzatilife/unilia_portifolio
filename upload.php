 <!DOCTYPE html>
 <html>
 
 <head>
 <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
 <link href = "style.css" type = "text/css" rel = "stylesheet">
	<title>Add Post</title>
		
	
	<link rel="Stylesheet" href="bootstrap/css/bootstrap.css" />
		<link rel="Stylesheet" href="bootstrap/css/bootstrap-theme.css" />
		<link rel="Stylesheet" href="bootstrap/css/w3.css" />
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
		<link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
</head>
<body style="background-color: grey;">

		<div class = "header">
			<?php require('navbar.php'); ?>
		</div>
			

<div id = "content">

			
			
			
<div class = "container" >
<div class = "panel panel-primary">
	 <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	
		<div class = "panel-heading"> Fill the form below to Add Post </div>
		<div class="panel-body">
		<form method = "post" action = "upload.php" enctype = "multipart/form-data">



<div class = "form-group">
	<label>Post Title</label>
	<input type = "text" name = "title" class = "form-control" width="50%">
			</div>

<div class = "form-group">
	<label>Post Author</label>
	<input type = "text" name = "author" class = "form-control"  >
			</div>

			<div class = "form-group">
				<label>Post Keyword</label>
	<input type = "text" name = "keyword" class = "form-control"  >
			</div>



<input type = "hidden" name = "size" value = "1000000">
<div>
<input type = "file" name = "image">
</div>
 <div>
<textarea type="text" name = "content" cols = "40" rows = "4" placeholder = "content Goes here  ......."></textarea>
</div>
<div>
<input type = "submit" name= "upload" class= "btn btn-primary"  value = "Add Status">
</div>
		
</form>
</div>
</div>
</div>
</div>

<?php

@mysql_connect("localhost","root", "");
mysql_select_db("unilia");

if(isset($_POST['upload'])) {
	$id = $_POST['id']; 
    $title = $_POST['title'];
    $date = date('d-m-y');
	$author = $_POST['author'];
	$keyword = $_POST['keyword'];
	$image = $_FILES['image']['name'];
	$content = $_POST['content'];
	$imageTmp = $_FILES['image']['tmp_name'];

if ($title=='' or $author=='' or $keyword=='' or $image=='' or $content=='') {
	echo "<script>alert('Please fill the fields before uploading')</script>";
	exit();

}else{

	move_uploaded_file($imageTmp, "images/$image");
	
	$insert_query = "insert into posts(title, author, keyword, image, content, date) values('$title','$author','$keyword','$image', '$content', '$date')"; 

	if (mysql_query($insert_query)) {
		echo "<script> alert(Post Published successfully!)</script>";
	}

}
}
  ?>
</body>
</html>

