<?php 
include("auth.php"); //include auth.php file on all secure pages
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin area Pages</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
</head>
<body>
<img src="banner.jpg" class="img-responsive"/>
<?php
if(isset($_POST["submit"]))
{
include("includes/pixval.php");//validate passport and include class form validate
include("includes/connection.php");
$r=$db->real_escape_string($_POST["staffid"]);
$d=$db->real_escape_string($_POST["department"]);
$s=$db->real_escape_string($_POST["surname"]);
$f=$db->real_escape_string($_POST["firstname"]);
$o=$db->real_escape_string($_POST["othername"]);

$im=$_FILES['upload']['name'];
$tep="/^[a-zA-Z]{1,}$/";
$epattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/";
$upattern="/^[a-zA-Z0-9]+$/";
$ts='surname';
$tf='firstname';
$to='othername';
$em='staffid';
$dd='department';
$su=new formvalidation($s,$tep,$ts);
$fiu=new formvalidation($f,$tep,$tf);
$ou=new formvalidation($o,$tep,$to);
$ema=new formvalidation($r,$upattern,$em);
$cl=new formvalidation($d,$upattern,$dd);
$osu=$su->validate1();
$ofu=$fiu->validate1();
$oou=$ou->validate1();
$oem=$ema->validate1();
$ocl=$cl->validate1();


if($oo==1 && $osu==1 && $ofu==1 && $oou==1 && $oem==1 && $ocl==1)
{

	move_uploaded_file ($_FILES['upload']['tmp_name'], "staffphoto/".$_FILES['upload']['name']);
	$insert_row=$db->query("INSERT INTO staff (staffid,surname,firstname,othername,department,image) VALUES('$r','$s','$f','$o','$d','$im')");
	if($insert_row)
	{
		echo "<script>window.alert('Information was successfully submitted')</script>";
	}
}
			
	else
	{
	
	echo "<script>window.alert('Sorry! Contact the administrator.')</script>";
	}
	}
	
	
?>

<div class="navbar navbar-inverse">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapsed" data-target="#navbar">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#">AdminStrap</a>
</div>
<div id="navbar" class="collapse navbar-collapse">
<ul class="nav navbar-nav">
<li><a href="index.php" class="anc">Dashboard</a></li>
<li class="active"><a href="student.php">Add/Edit Student</a></li>
<li><a href="lecturer.php">Add/Edit Lecturer</a></li>
<li><a href="users.php">Users</a></li>
<li><a href="calender.php">Calender</a></li>
</ul>

<ul class="nav navbar-nav navbar-right">
<li><a href="index.php">Welcome,<?php echo $_SESSION["username"]; ?></a></li>
<li><a href="login.php">Logout</a></li>
</ul>
</div>
</div>
</div>
<header id="header">
<div class="container">
<div class="row">
<div class="col-md-10">
<h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>Enter Staff Record</h1>
</div>
<div class="col-md-2">
<a class="btn btn-danger" href="lecturer.php">Back</a>
</div>
</div>
</div>

</header >
<section id="breadcrumb">
<div class="container">
<ol class="breadcrumb">
<li class="active"><a href="index.php">Dashboard</a></li>
<li class="active">Staff</li>
</ol>
</div>
</section>

<section id="main">
<div class="container">
<div class="row">
<div class="col-md-3">
<div class="list-group">
  <a href="index.php" class="list-group-item active"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>Dashboard </a>
  <a href="student.php" class="list-group-item  "><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>Add/Edit Student<span class="badge">12</span></a>
  <a href="lecturer.php" class="list-group-item main-color-bg"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Add/Edit Lecturer<span class="badge">33</span></a>
  <a href="users.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Users<span class="badge">203</span></a>
  <a href="calender.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Calender<span class="badge">203</span></a>
</div>
<div class="well">
<h4>Disk Space Used</h4>
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
    60%
  </div>
</div>

<h4>Bandwidth Used</h4>
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
    40%
  </div>
</div>
</div>
</div>
<div class="col-md-9">
<!--------web-site oveview--->
<div class="panel panel-default">
  <div class="panel-heading main-color-bg">
    <h3 class="panel-title">Enter New Staff Record</h3>
  </div>
  <div class="panel-body">
  <form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  <div class="form-group">
   <fieldset><legend>Upload  a JPEG or PNG image of not more than 30KB:</legend>
	<p><b>File:</b> <input type="file" name="upload" /></p>
	</fieldset>
	</div>
   <div class="form-group">
		<label>Enter Staffid</label>
		<input type="text" class="form-control" name="staffid" placeholder="Staff ID" />
		</div>
		 <div class="form-group">
		<label>Enter Department</label>
		<input type="text" class="form-control" name="department" placeholder="Department" />
		</div>
       
		<div class="form-group">
		<label>Enter Surname</label>
		<input type="text" class="form-control" name="surname" placeholder="Surname" />
		</div>
		<div class="form-group">
		<label>Enter First Name</label>
		<input type="text" class="form-control" name="firstname" placeholder="First Name" />
		</div>
		<div class="form-group">
		<label>Enter Other Name</label>
		<input type="text" class="form-control" name="othername" placeholder="Other Name" />
		</div>
		<input type="submit" name="submit" class="btn btn-default" value="Submit"/>
  </form>
  
    
  </div>
</div>



</div>
</div>
</div>
</section>

<?php include("includes/footer.php") ?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	 <script src="js/bootstrap.min.js"></script>
</body>
</html>

