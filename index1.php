 <?php  
session_start();
error_reporting(0);
include('connection.php');


//code deletion
if(isset($_GET['id']))
{
$rowid=intval($_GET['id']);
$query=mysqli_query($con,"delete from posts where id='$rowid'");
if($query){
echo "<script>alert('Record successfully deleted');</script>";
echo "<script>window.location.href='manage-expense.php'</script>";
} else {
echo "<script>alert('Something went wrong. Please try again');</script>";

}

}


?>






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
    <div class="panel-heading"> News Updates </div>

<div>
    <?php
    include("connect.php");
    
    $select_post = "select * from posts order by id desc";

    $run_posts = mysql_query($select_post);

    


        $db = mysqli_connect("localhost", "root", "", "unilia");
        $sql = "SELECT * FROM posts ORDER BY id DESC";
        $result = mysqli_query($db, $sql);
        while ($row = mysqli_fetch_array($result)){

?>  

<p><ol class='breadcrumb'>
<li class ='active'><strong>Published On</strong></li></li> <li class='active'></li>"<php <?php echo $author ?> </li>
<li class ='active'><strong>Published By</strong></li></li> <li class='active'></li>".$row['author']."
<td><?php echo $author;?></td>

 </ol></p>";

 echo "<div class='media'>
<a class='media-right'>
<img class='img-rounded' src='./images/".$row['image']."'  alt = 'Cinque Terre'width='200' height = '180'>

</a>

    <div class='media-body'>
        <h1 class='media-heading'>".$row['title']."</h1>
        <p>".$row['content']."</p>

        <a href='view.php'><input type = 'submit' class = 'btn btn-primary btn-sm' value='Comments'></a>

</div>
</div> ";

echo "<td><a href =view.php?id = ".$row['id'].">view</a></td>";

echo "<a href='view.php <?php echo `?id=`.$id; ?>' class='btn btn-primary'><i class='glyphicon glyphicon-eye-open'></i>View</a></center></td>";
        
    }

?>
















</div>
</div>
</div>
</div>
<div id = "myNav" data-spy = "affix" data-offset-top = "60" data-offset-bottom = "200">
<div class = "col-md-3">
<ul class = "nav nav-tabs nav-stacked affix" data-spy = "affix" data-offset-top = "200" style="background-color:#232121;">
    <p>
<ul class="nav navbar-nav">
        <li class="w3-dropdown-hover w3-hover-black">

          <a class="w3-hover-black" href="#" style="color: white;font-size:15px; "><b>Forms and Utilities Online</b> <i class="fa fa-caret-down" ></i></a>

          <div class="w3-dropdown-content w3-white w3-card-4">
            <a href="form1 insert.php">Application form</a>
            <a href="form2 insert.php">Student handbook</a>
            <a href="form3 insert.php">clearance Forms</a>
            <a href="form4 insert.php">Examination Timetable</a>
          </div>

        </li>

        </ul>

    </nav>
</p>



<p>

</p>
<p>
<ul class="nav navbar-nav">
        <li class="w3-dropdown-hover w3-hover-black">

          <a class="w3-hover-black" href="#" style="color:white;font-size:15px;"><b>Degree Programs</b> <i class="fa fa-caret-down" ></i></a>

          <div class="w3-dropdown-content w3-white w3-card-4">
            <h4>Faculty of Applied Sciences</h4>
            <a href="#">BSc In Computer Engineering</a>
            <a href="#">BSc In environmental management</a>
            <a href="#">BSc In education</a>
            <a href="#">BSc In information and communication</a>
            <a href="#">BSc In food security and nutrition</a>
            <a href="#">BSc In public health</a>

            <h4>Faculty of Humanities</h4>
            <a href="#">BSE In education(humanities)</a>
        
          </div>

        </li>

        </ul>
    </nav>
</p>
</ul>
</div>
</div>
</div>
<?php }  ?>
</body>
</html>