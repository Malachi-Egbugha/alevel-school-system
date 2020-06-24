<div id="annouce" class="row content">
<div class="panel panel-default">
  <div class="panel-heading main-color-bg">
    <h3 class="panel-title" style="text-align:center">ENTER ANNOUCEMENT</h3>
  </div>
  <div class="panel-body">
  <form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  <div class="form-group">
		<input type="hidden" class="form-control" name="date" value="<?php echo date("Y/m/d");?>" />
		</div>
       
 
   <div class="form-group">
		<label>Enter Annoucement</label>
		<textarea name="announce" class="form-control" rows="5" placeholder="Enter Announcement">
		
		</textarea>
		
		</div>
		 
<div class="form-group">
		
		<input type="hidden" class="form-control" name="announcename" value="<?php echo $_SESSION['firstname']." ".$_SESSION['surname']; ?>" />
		</div>
       
		
		
	<div class="form-group">
		<label>Class</label>
		<select name="clas" class="form-control">
		
		<option>HND1</option>
		
		</select>
		</div>
		<input type="submit" name="submit" class="btn btn-default" value="announce"/>
  </form>
</div>
</div>
</div>
