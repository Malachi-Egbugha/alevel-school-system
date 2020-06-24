<?php 
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
			  echo $this->error ." "."name must not be empty </br>";
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

}
?>
 