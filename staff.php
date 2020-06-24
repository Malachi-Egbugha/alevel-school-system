<?php 
session_start();
if($_SESSION['status']!="staff")
{
header("Location: index.php");
exit();
}
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Staff</title>
<link href="css/bootstrap.min.css" rel="stylesheet"/>
<link href="css/style.css" rel="stylesheet" />
<style>
body{
background-color: #000099;
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
background-color: #339933;
}

.content{
text-align:left;
}

</style>
<script src="student.js" type="text/javascript"></script>
</head>
<body onload="show('welcome')">
<img src="image/banner.jpg" class="img-responsive"/>
<?php


//assigment upload code
if (isset($_POST["submit"]))
{
include("includes/connection.php");

if ($_POST["submit"]=="Assigment")
{

$c=$_POST["clas"];
$r=$_POST["coursetittle"];
$s=$_POST["date"];
$f=$_POST["lecturer"];
$o=$_POST["code"];
$p=$_POST["submission"];
$e=$_POST["submail"];
$im=$_FILES['upload']['name'];



move_uploaded_file ($_FILES['upload']['tmp_name'], "staff/".$_FILES['upload']['name']);


				$inser_row=$db->query("INSERT INTO dhndone (coursetittle,date,lecturername,coursecode,lastday,email,pdf) VALUES('$r','$s','$f','$o','$p','$e','$im')");
				if($inser_row)
				{echo "<script>window.alert('Your information has been submitted')</script>";}
	
			
			else
			{
			echo "<script>window.alert('Sorry! There is some problem.')</script>";
			}
}
	
	
	

	
elseif($_POST["submit"]=="Submit")//start material upload
	{
$c=$_POST["clas"];
$r=$_POST["coursetittle"];//booktittle
$s=$_POST["date"];
$f=$_POST["lecturer"];//Author of the Book
$o=$_POST["code"];//Enter publisher
$p=$_POST["submission"];//Enter Lecturer's Name
$e=$_POST["submail"];//Course Tittle
$im=$_FILES['upload']['name'];


move_uploaded_file ($_FILES['upload']['tmp_name'], "material/".$_FILES['upload']['name']);
	
				$inser_row=$db->query("INSERT INTO mhndone (booktittle,date,author,publisher,nameofLecturer,coursetittle,class) VALUES('$r','$s','$f','$o','$p','$e','$im')");
				if($inser_row)
				{echo "<script>window.alert('Your information has been submitted')</script>";}
			
			
			else
			{
			echo "<script>window.alert('Sorry! There is some problem.')</script>";
			}
	



	}//end esseif of material
	elseif($_POST["submit"]=="announce")//Enter Announcement
	{
	include("includes/clas.php");//include class form validate
	$c=$_POST["clas"];
    $r=$_POST["announce"];//
	$a=$_POST["announcename"];//
	$d=$_POST["date"];
    $er='Announcement';
	$ea='Announcers Name';
	$upattern="/^[a-zA-Z0-9]+$/";
	$tep="/^[a-zA-Z]{1,}$/";
	$vr=new formvalidation($r,$upattern,$er);
	$va=new formvalidation($a,$upattern,$ea);
    $vrr=$vr->validate2();
	 $vaa=$va->validate2();
	if($vrr==1 && $vaa==1)
	{
	if($c=='HND2')
			{
				$inser_row=$db->query("INSERT INTO ahndtwo (announce,announcer,date) VALUES('$r','$a','$d')");
				if($inser_row)
				{echo "<script>window.alert('Your information has been submitted')</script>";}
			}
			elseif($c=='HND1')
			{
				$inser_row=$db->query("INSERT INTO ahndone (announce,announcer,date) VALUES('$r','$a','$d')");
				if($inser_row)
				{echo "<script>window.alert('Your information has been submitted')</script>";}
			}
			elseif($c=='ND1')
			{
				$inser_row=$db->query("INSERT INTO andone (announce,announcer,date) VALUES('$r','$a','$d')");
				if($inser_row)
				{echo "<script>window.alert('Your information has been submitted')</script>";}
			}
			elseif($c=='ND2')
			{
				$inser_row=$db->query("INSERT INTO andtwo (announce,announcer,date) VALUES('$r','$a','$d')");
				if($inser_row)
				{echo "<script>window.alert('Your information has been submitted')</script>";}
			}
			else
			{
			echo "<script>window.alert('Sorry! There is some problem.')</script>";
			}
	}
	
	
	}//end of annoucement
}
 
 ?>
<div class="sep"></div>
<div class="container-fluid">
<div class="row">
<div class="col-md-2">
<img src="<?php echo "admin/staffphoto/".$_SESSION['image'];?>" class="img-thumbnail" width="200px" height="200px"/>
</div>
<div class="col-md-9 col-md-offset-1 head">
<ul class="up">
<li><?php echo "Department of"." ". $_SESSION['department'];?></li>
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
<p><button  type="button" class="btn btn-success btn-lg ">View Class</button></p>
<p><button onClick="show('material')" type="button" class="btn btn-success btn-lg">Upload Materials</button></p>
<p><button onClick="show('assigment')"type="button" class="btn btn-success btn-lg">Upload Assigment</button></p>
<p><button onClick="show('annouce')" type="button" class="btn btn-success btn-lg">Give News</button></p>
<p><a href="http://127.0.0.1:81/kaura/cbt/admin/code/" target="_blank" class="btn btn-success btn-lg" role="button">Exam Control Panel</a></p>
</div>

<div class="col-md-9">
<!-------add assigment---->
<?php include("includes/assigment.php"); 
include("includes/material.php");
include("includes/announce.php");
include("includes/staffwelcome.php");
?>






</div><!-------end column------->
</div>
</div>

<div id="footer">
<p>Copyright Kaura Namoda Polytechic, &copy;2017</p>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	 <script src="js/bootstrap.min.js"></script>
</body>
</html>
