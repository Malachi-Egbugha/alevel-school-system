<div id="profile" class="row content">
<div class="col-md-12">
<table class="table table-striped">
<caption class="text-center">Student Profile</caption>
<thead>
<tr>
	<th>SURNAME</th>
	<th>FIRSTNAME</th>
	<th>OTHERNAME</th>
	<th>EMAIL</th>
	<th>CLASS</th>
</tr>
</thead>
<tbody>
<tr>
	<td><?php echo $_SESSION['surname'];?></td>
	<td><?php echo $_SESSION['firstname'];?></td>
	<td><?php echo $_SESSION['other'];?></td>
	<td><?php echo $_SESSION['email'];?></td>
	<td><?php echo $_SESSION['class'];?></td>
</tr>
</tbody>
</table>
</div>
</div>