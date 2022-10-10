<!DOCTYPE html>
<html>
<head>
	<title>test</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
		<link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
		<link href="css/w3.css" rel="stylesheet" type="text/css" />
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
        
    
     

echo "<p><ol class='breadcrumb'>
<li class ='active'><strong>Published On:</strong></li></li> <li class='active'></li>".$row['date']."
<li class ='active'><strong>Posted By:</strong></li></li> <li class='active'></li>".$row['author']."


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

        echo "<p style= 'color:white;'>".$row['content']. "</p>";
         echo "<p style= 'color:white;'>".$row['date']. "</p>";
        

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
<div id = "myNav" data-spy = "affix" data-offset-top = "60" data-offset-bottom = "200">
<div class = "col-md-3">
<ul class = "nav nav-tabs nav-stacked affix" data-spy = "affix" data-offset-top = "200" style="background-color: #232121; color: black;">
	<p>
<ul class="nav navbar-nav">
		<li class="w3-dropdown-hover w3-hover-black">

		  <a class="w3-hover-black" href="#"><b><<--Forms and Utilities Online -->></b> <i class="fa fa-caret-down" ></i></a>

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

		  <a class="w3-hover-black" href="#"><b>Degree Programs(Unilia)</b> <i class="fa fa-caret-down" ></i></a>

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
</body>
</html>