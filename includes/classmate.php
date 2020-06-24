<div id="classmate" class="row content">
<?php include("includes/connection.php");

// for hnd 1

		$qury=$db->query("SELECT * FROM hndone");//select from student table
		if($qury->num_rows)
		{
				while($row=$qury->fetch_object())
					{
					?>
					<div class="col-lg-4 col-md-4 wow fadeInLeft" data-wow-delay="2s">
					<img  class="img-circle" src="classimage/ict2.jpg" alt="" width="200px" height="200px">
					<h4><?php echo $row->surname.",".$row->firstname." ".$row->othername; ?></h4>
					<b><?php echo $row->email;?></b>
					<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
					</div>
					<?php 
					}
		
		}
		else
		{
		echo "<div class='fom'><h2>No Classmate</h2></div>";
		}





?>
</div>
