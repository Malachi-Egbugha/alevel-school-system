<?php 
session_start();

if($_SESSION['status']!="student")
{
header("Location: index.php");
exit();
}
 
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Student</title>
<link href="css/bootstrap.min.css" rel="stylesheet"/>
<link href="css/style.css" rel="stylesheet" />
<style>
body{
background-color:#000066;
color: #FF0000;
font-family:Verdana, Arial, Helvetica, sans-serif;
}
/*Footer*/
#footer{
background:#333333;
color:#ffffff;
text-align:center;
padding:30px;
margin-top:30px;
}
.up li
{
display:inline-block;
color:#FFFFFF;
margin-left:20px;
text-align:justify;
font-size:16px;
font-weight:bold;
font-family:"Courier New", Courier, monospace;
}
.head
{
background-color:#CC0000;
}

}

</style>
<script src="student.js" type="text/javascript"></script>
</head>
<body onload="show('welcome')">
<img src="image/banner.jpg" class="img-responsive"/>
<div class="sep"></div>
<div class="container-fluid">
<div class="row">
<div class="col-md-2">
<img src="<?php echo "admin/studentphoto/".$_SESSION['image'];?>" class="img-thumbnail" width="200px" height="200px"/>
</div>
<div class="col-md-9 col-md-offset-1 head">
<ul class="up">
<li><?php echo $_SESSION['class'];?></li>
<li><?php echo "Welcome"." ".$_SESSION['firstname']." ".$_SESSION['surname'];?></li>
<li><?php echo "<a href=\"logout.php\"><small>Logout</small></a>";?></li>
</ul>
</div>
</div>
</div>
<div class="sep"></div>
<!----------------------------end of header---------->
<div class="container-fluid">
<div class="row">
<div class="col-md-3 chec">
<p><button onClick="show('profile')" type="button" class="btn btn-danger btn-lg ">My Profile</button></p>
<p><button onClick="show('classmate')" type="button" class="btn btn-danger btn-lg">My Classmates</button></p>
<p><button onClick="show('material')" type="button" class="btn btn-danger btn-lg">E-LIBRARY</button></p>
<p><button onClick="show('assigment')" type="button" class="btn btn-danger btn-lg">Assigment</button></p>
<p><button onClick="show('announce')"  type="button" class="btn btn-danger btn-lg">News Update</button></p>
<p><a href="http://127.0.0.1:81/kaura/cbt/public/code/" target="_blank" class="btn btn-danger btn-lg" role="button">Take Your Exam</a></p>
</div>

<div class="col-md-9">
<!---------student profile--------------------------->
<?php

 include("includes/profile.php");
//<!---------myclass mates------------->
 include("includes/classmate.php");
//<!----------assigment-------------->
include("includes/studentassigment.php");
//<!----------material-------------->
include("includes/studentmaterial.php");
//<!----------annoucement-------------->
include("includes/studentannouncement.php");
//<!----------annoucement-------------->
include("includes/studentwelcome.php");

?>

</div>






</div>


</div>
</div>

<!----footer-------->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	 <script src="js/bootstrap.min.js"></script>
	 <div id="footer">
<p>Copyright Kaura Namoda Polytechic, &copy;2017</p>
</div>
</body>
</html>
