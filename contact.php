<!DOCTYPE html>
<html>
<head>
    <title>MyUnila</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="boostrap/css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
        <link href="bootstrap/css/w3.css" rel="stylesheet" type="text/css" />
    <link href = "Bootstrap/css/Bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body style="background-color: grey">


<div class="header">
<?php require('navbar.php'); ?>
</div>


<div id = "myNav" data-spy = "affix" data-offset-top = "60" data-offset-bottom = "200">

<div class = "col-md-9">


    <div class="panel panel-primary">
    <div class="panel-heading"> Contact Information </div>


    <div class="container">
        <div class="media">
    <div class="form-group">
        <div class="media-right">
<form action="#" method="POST" class="form-group">
<h3>E<span class="glyphicon glyphicon-envelope"></span>ail</h3>

<div class="form-group">
<label>From</label>
<span class="glyphicon glyphicon-envelope"></span><input type="email" required='required' name="email1" class="form-control" size="60" placeholder="your email here...">
</div>

<div class="form-group">
<label>To</label>
<span class="glyphicon glyphicon-envelope"></span><input type="email" required='required' name="email" class="form-control" size="60" value="unilia@gmail.com" id="email">
</div>

<div class="form-group">
<label>Subject</label>
<input type="text" name="text" required = "required"class="form-control" >
</div>

<div class="form-group">
        <textarea name = 'comments' id = 'commemts' required='required' style = 'font-family:sans-sarif;font-size:1.5em;height:80px;'>
        compose mail...
        </textarea> 
        
 </div>   

<input type="submit" class="btn btn-success btn-sm" value="Send" >
<input name="reset" type="reset" value="Clear" id="clear" class="btn btn-danger btn-sm">

</form>
</div>
<div class="media-body">
<h4 class="media-right">you can also contact us via the following</h4>
</div>
</div>
</div>
</div>
</div>
</div>
</div>













</div>
</div>
</div>
</div>


</ul>
</div>
</div>
</div>
</body>
</html>