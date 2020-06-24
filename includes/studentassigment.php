<div id="assigment" class="row content">
<div class="col-md-12">
<table class="table table-striped">
<caption class="text-center">ASSIGMENT</caption>



	


<?php include("includes/connection.php");


		$qury=$db->query("SELECT * FROM dhndone");//select from dtable(assigment) table
		if($qury->num_rows)
		{
				while($row=$qury->fetch_object())
					{
					?>
					<tr>
					<td><?php echo $row->coursetittle;?></td>
					<td><?php echo $row->date; ?></td>
					<td><?php echo $row->lecturername;?></td>
					<td><?php echo $row->coursecode;?></td>
					<td><?php echo $row->lastday;?></td>
					<td><?php echo $row->email;?></td>
					<td><a href="staff/<?php echo $row->pdf; ?>" type="btn">Download</a></td>
					
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
		echo "<div class='fom'><h2>No ASSIGMENT</h2></div>
		</div>
		</div>";
		}







?>