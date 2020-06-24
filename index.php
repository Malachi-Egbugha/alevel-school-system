<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
  <?php 
  session_start();
if(isset($_POST["submit"]))
{
include("includes/connection.php");
$username=$db->real_escape_string($_POST["username"]);
$pa=$db->real_escape_string($_POST["pass"]);
$st=$db->real_escape_string($_POST["status"]);
		if($st=='student')//check if is a student login
		{
				$qury=$db->query("SELECT * FROM student WHERE password='$pa'");//select from student table
				if($qury->num_rows)
				{
						while($row=$qury->fetch_object())
							{
							$_SESSION['email']=$row->email;
							$_SESSION['password']=$row->password;
							$_SESSION['surname']=$row->surname;
							$_SESSION['other']=$row->othername;
							$_SESSION['firstname']=$row->firstname;
							$_SESSION['class']=$row->class;
							$_SESSION['image']=$row->image;
							$_SESSION['status']='student';
							}
				header("Location: student.php"); // Redirect user to student.php
				
				
				}
				else
				{
					echo "<script>window.alert('Username/password is incorrect.')</script>";
				}
		}
		
		elseif($st=='staff')//check if is a staff login
		{
				$qury=$db->query("SELECT * FROM staff WHERE staffid='$pa'");//select from staff table
				if($qury->num_rows)
				{
						while($row=$qury->fetch_object())
							{
							$_SESSION['staffid']=$row->staffid;
							$_SESSION['password']=$row->password;
							$_SESSION['surname']=$row->surname;
							$_SESSION['other']=$row->othername;
							$_SESSION['firstname']=$row->firstname;
							$_SESSION['department']=$row->department;
							$_SESSION['image']=$row->image;
							$_SESSION['status']='staff';
							}
				header("Location: staff.php"); // Redirect user to student.php
				
				
				}
				else
				{
				echo "<script>window.alert('Username/password is incorrect.')</script>";
			
				}
				
		
		}
}
?>
    <div id="myNavbar" class="navbar navbar-default navbar-fixed-top " role="navigation">
	<div class="container">
	<h1>Federal Polytechnic Kaura Namoda</h1>
	</div>
	</div>
	<!---End navigation-->
	<!--Header-->
	<div id="header" class="header">
	<div class="container">
	<div class="row">
	<div class="col-lg-6 col-md-6" >
	<h1>E-Learning System</h1>
	</div>
	<!--------right side of login----------------->
	<div class="col-lg-6 col-md-6">
	<div class="panel panel-primary">
  <div class="panel-heading">Login</div>
  <div class="panel-body">
  <div class="col-sm-1">
  </div>
  <div class="col-sm-10">
    <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="email" name="username" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
 
  <div class="radio">
    <label>
      <input type="radio" name="status" value="student">Student
    </label>
  </div>
  <div class="radio">
    <label>
      <input type="radio" name="status" value="staff">Staff
    </label>
  </div>
   <p></p>
  <input type="submit" name="submit" value="Login" class="btn btn-danger"/>
</form>
</div>
 <div class="col-sm-1">
  </div>
  </div>
</div>
	</div>
	</div>
	</div>
	</div>
	<!----------- end header---------->
	
	
	
	 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
