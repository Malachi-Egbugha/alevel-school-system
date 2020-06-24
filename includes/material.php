<div id="material" class="row content">
<div class="panel panel-default">
  <div class="panel-heading main-color-bg">
    <h3 class="panel-title" style="text-align:center">Upload Material</h3>
  </div>
  <div class="panel-body">
  <form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  <div class="form-group">
   <fieldset><legend>Upload  PDF DOCUMENT:</legend>
	<p><b>File:</b> <input type="file" name="upload" /></p>
	</fieldset>
	</div>
   <div class="form-group">
		<label>Book Tittle</label>
		<input type="text" class="form-control" name="coursetittle" placeholder="Enter Tittle of Book" />
		</div>
		 <div class="form-group">
		<input type="hidden" class="form-control" name="date"  value="<?php echo date("Y/m/d");?>" />
		</div>
       
		<div class="form-group">
		<label>Author</label>
		<input type="text" class="form-control" name="lecturer" placeholder="Enter Author of the Book" />
		</div>
		<div class="form-group">
		<label>Publisher</label>
		<input type="text" class="form-control" name="code" placeholder="Enter publisher" />
		</div>
		<div class="form-group">
		
		<input type="hidden" class="form-control" name="submission" value="<?php echo $_SESSION['firstname']." ".$_SESSION['surname']; ?>" />
		</div>
		
		<div class="form-group">
		<label>Course Tittle</label>
		<input type="text" class="form-control" name="submail" placeholder="Enter Course Tittle" />
		</div>
		
	<div class="form-group">
		<label>Class</label>
		<select name="clas" class="form-control">
		
		<option>HND1</option>
		
		</select>
		</div>
		<input type="submit" name="submit" class="btn btn-default" value="Submit"/>
  </form>
</div>
</div>
</div>
