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
<li ><a href="student.php">Add/Edit Student</a></li>
<li><a href="lecturer.php">Add/Edit Lecturer</a></li>
<li class="active"><a href="users.php">Users</a></li>
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
<h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>Admin Users Profile Page</h1>
</div>
<div class="col-md-2">
<a class="btn btn-danger" href="adduser.php">Add Admin</a>
</div>
</div>
</div>

</header >
<section id="breadcrumb">
<div class="container">
<ol class="breadcrumb">
<li class="active"><a href="index.php">Dashboard</a></li>
<li class="active">Pages</li>
</ol>
</div>
</section>

<section id="main">
<div class="container">
<div class="row">
<div class="col-md-3">
<div class="list-group">
  <a href="index.php" class="list-group-item active"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>Dashboard </a>
  <a href="student.php" class="list-group-item "><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>Add/Edit Student<span class="badge">12</span></a>
  <a href="lecturer.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Add/Edit Lecturer<span class="badge">33</span></a>
  <a href="users.php" class="list-group-item  main-color-bg"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Users<span class="badge">203</span></a>
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
    <h3 class="panel-title">Admin Users Page</h3>
  </div>
  <div class="panel-body">
  <div class="row">
  <div class="col-md-9">
  <input class="form-control" type="text" placeholder="Fiter pages"/>
  </div>
  </div>
  <br />

  <?php
   include("includes/connection.php");
   $qury=$db->query("SELECT * FROM admin");//select from dtable(assigment) table
		if($qury->num_rows)
		{
		?>
	<table class="table table-striped table-hover">
	<thead>
	<tr>
	<th>Username</th>
	<th>Firstname</th>
	<th>Lastname</th>
	<th>Date Added</th>
	</tr>
	</thead>
		<tbody>
		<?php
				while($row=$qury->fetch_object())
					{
					?>
					<tr>
					<td><?php echo $row->username;?></td>
					<td><?php echo $row->firstname;?></td>
					<td><?php echo $row->surname;?></td>
					<td><?php echo $row->date;?></td>
					<td><a class="btn btn-danger btn-md">Delete</a></td>
					</tr>
					
					<?php 
					}
					}
					?>
					</tbody>
					</table>
   

    
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
