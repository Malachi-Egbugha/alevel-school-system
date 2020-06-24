<div id="material" class="row content">
<div class="col-md-12">
<table class="table table-striped">
<caption class="text-center">E-LIBRARY</caption>



	


<?php include("includes/connection.php");

// for hnd 1
	$qury=$db->query("SELECT * FROM mhndone");//select from dtable(assigment) table
		if($qury->num_rows)
		{
		?>
	<thead>
	<tr>
	<th>Book Tittle</th>
	<th>Date Uploaded</th>
	<th>Author</th>
	<th>Publisher</th>
	<th>Lecturer's Name</th>
	<th>Course Tittle</th>
	</tr>
	</thead>
		<tbody>
		<?php
				while($row=$qury->fetch_object())
					{
					?>
					<tr>
					<td><?php echo $row->booktittle;?></td>
					<td><?php echo $row->date; ?></td>
					<td><?php echo $row->author;?></td>
					<td><?php echo $row->publisher;?></td>
					<td><?php echo $row->nameofLecturer;?></td>
					<td><?php echo $row->coursetittle;?></td>
					
					<td><a href="material/<?php echo $row->class; ?>" type="btn">Download</a></td>
					
					</tr>
					
					<?php 
					}
					?>
					</tbody>
					</table>
					</div>
					</div>
					
					<?php

		
		}
		else
		{
		echo "<div class='fom'><h2>No AVAILABLE MATERIAL</h2></div>
		</div>
		</div>";
		
		}





?>