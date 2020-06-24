<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin area Account Login</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<img src="banner.jpg" class="img-responsive"/>
<?php
session_start();
//Checking is user existing in the database or not
if(isset($_POST["submit"]))
{
include("includes/connection.php");
$username=$db->real_escape_string($_POST["user"]);//Checking is user existing in the database or not
$pa=$db->real_escape_string($_POST["pass"]);
$qury=$db->query("SELECT * FROM admin WHERE password='$pa'");
$rows = mysqli_num_rows($qury);
if($rows==1)
{
$_SESSION['username'] = $username;
header("Location: index.php"); // Redirect user to index.php
}
else
{
echo "<div class='fom'><h2>Username/password is incorrect.</h2></div>";
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
<a class="navbar-brand" href="#">Department Of Computer Science Kaura Namoda Polytechic</a>
</div>
<div id="navbar" class="collapse navbar-collapse">

</div>
</div>
</div>


<header id="header">
<div class="container">
<div class="row">
<div class="col-md-12">
<h1 class="text-center">Admin Area <small>Account Login</small></h1>
</div>
</div>
</div>
</header >




<section id="main">
<div class="container">
<div class="row">

<div class="col-md-4 col-md-offset-4">
<form id="login"  action="<?php echo $_SERVER['PHP_SELF'];?>" class="well" method="post">
<div class="form-group">
<label>User Name</label>
<input type="email" name="user" class="form-control" placeholder="Enter Email "/>
</div>
<div class="form-group">
<label>Password</label>
<input type="password" name="pass" class="form-control" placeholder="Password"/>
</div>
<input type="submit" name="submit" value="Login" class="class="btn btn-default""/>
</form>

</div>
</div>
</div>
</section>

<div id="footer">
<p>Copyright Kaura Namoda Polytechic, &copy;2017</p>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	 <script src="js/bootstrap.min.js"></script>
</body>
</html>
