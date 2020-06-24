<div id="assigment" class="row content">
<div class="panel panel-default">
  <div class="panel-heading main-color-bg">
    <h3 class="panel-title" style="text-align:center">Enter New Assigment</h3>
  </div>
  <div class="panel-body">
  <form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  <div class="form-group">
   <fieldset><legend>Upload  PDF DOCUMENT:</legend>
	<p><b>File:</b> <input type="file" name="upload" /></p>
	</fieldset>
	</div>
   <div class="form-group">
		<label>Enter Course Title</label>
		<input type="text" class="form-control" name="coursetittle" placeholder="Course Tittle" />
		</div>
		 <div class="form-group">
		<input type="hidden" class="form-control" name="date" value="<?php echo date("Y/m/d");?>" />
		</div>
       
		<div class="form-group">
		
		<input type="hidden" class="form-control" name="lecturer" value="<?php echo $_SESSION['firstname']." ".$_SESSION['surname']; ?>"/>
		</div>
		<div class="form-group">
		<label>Course Code</label>
		<input type="text" class="form-control" name="code" placeholder="Course Code" />
		</div>
		<div class="form-group">
		<label>Submission Date</label>
		<input type="text" class="form-control" name="submission" placeholder="Last Day of Submission" />
		</div>
		
		<div class="form-group">
		<label>Email to submit</label>
		<input type="email" class="form-control" name="submail" placeholder="Email to submit" />
		</div>
		
	<div class="form-group">
		<label> Class</label>
		<select name="clas" class="form-control">
		
		<option>HND1</option>
		
		</select>
		</div>
		<input type="submit" name="submit" class="btn btn-default" value="Assigment"/>
  </form>
</div>
</div>
</div>