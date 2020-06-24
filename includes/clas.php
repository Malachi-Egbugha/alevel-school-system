<?php 
class picturevalidate //this class validates picture
{
public $name; //this defines the $_FILE[][] file name
public $tname;//this defines the temporary storage for file
public $type;//this defines the file type
public $size;//this defiles the file size
public $max;//this defines the maximum file size as define in your form
private $check;
public function __construct($name,$tname,$type,$size,$max)
{ $this->name=$name;
  $this->tname=$tname;
  $this->type=$type;
  $this->size=$size;
  $this->max=$max;
  $this->check=0;
}


public function picval()//this function validates the picture
{
if(isset($_POST['submit']))//this defines the post superglobal array 
{
$allowed = array ('application/pdf');

if(empty($this->tname))//this validates that the file have been uploaded
{
echo "No passport selected </br>";
return $this->check=0;
}

elseif($this->size>$this->max)//this validates that the file dos not exceed the maximum size
{
echo "file size is too large </br>";
return $this->check=0;
}
elseif(!in_array($this->type,$allowed))//this validates that the file type is allowed
{
echo $this->type." is not allowed </br>";
return $this->check=0;
}
elseif(file_exists("uploaded/".$this->name))//this validates that the file dos not exit already
{
echo $this->name."already registered </br>";
return $this->check=0;
}
else
{
return $this->check=1;//this returns the variable as 1 if error dos not exit
}

}

}

}
////////////////////////////////////////////////////////////////////
class formvalidation //form validation
{
 public $fpost;//specificpost variable
 public $pattern;//pattern matching variable
 public $error;//describe the variable
 private $check;
 public function __construct($fpost,$pattern,$error)
        {
             
             $this->fpost=$fpost;
             $this->pattern=$pattern;
             $this->error=$error;
             $this->check=0;
        }

 public function validate1()//this function validates the form
       {  
          
          
              if(empty($this->fpost))//this validates the entered data is not empty
		      { 
			  echo $this->error ." "." must not be empty </br>";
			  return $this->check=0;
			  }
		      elseif(!preg_match_all($this->pattern,$this->fpost))//this validates the pattern
		      {
		      echo "incorrect"." ".$this->error ."check properly </br>";
			  return $this->check=0;
			  }
		      else
		     {
			 return $this->check=1;
		   }
          
       }
	   
	   
	   
	   
	   public function validate2()//this function validates the form
       {  
          
          
              if(empty($this->fpost))//this validates the entered data is not empty
		      { 
			  echo $this->error ." "." must not be empty </br>";
			  return $this->check=0;
			  }
		      
		      else
		     {
			 return $this->check=1;
		   }
          
       }

}
?>
 


 