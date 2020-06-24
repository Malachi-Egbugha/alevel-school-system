<?php
class form //this class validates picture
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




if($oo==1 && $osu==1 && $ofu==1 && $oou==1 && $oem==1 && $ocl==1)
{

	move_uploaded_file ($_FILES['upload']['tmp_name'], "studentphoto/".$_FILES['upload']['name']);
	$insert_row=$db->query("INSERT INTO student (email,surname,firstname,othername,class,password,image) VALUES('$r','$s','$f','$o','$c','$p','$im')");
	if($insert_row)
	{
			if($c=='HND2')
			{
				$inser_row=$db->query("INSERT INTO hndtwo (email,surname,firstname,othername,class,password,mage) VALUES('$r','$s','$f','$o','$c','$p','$im')");
				if($inser_row)
				{echo "<script>window.alert('Your username and password  have been successfully submitted')</script>";}
			}
			elseif($c=='HND1')
			{
				$inser_row=$db->query("INSERT INTO hndone (email,surname,firstname,othername,class,password,image) VALUES('$r','$s','$f','$o','$c','$p',$'$im')");
				if($inser_row)
				{echo "<script>window.alert('Your username and password  have been successfully submitted')</script>";}
			}
			elseif($c=='ND1')
			{
				$inser_row=$db->query("INSERT INTO ndone (email,surname,firstname,othername,class,password,image) VALUES('$r','$s','$f','$o','$c','$p','$im')");
				if($inser_row)
				{echo "<script>window.alert('Your username and password  have been successfully submitted')</script>";}
			}
			elseif($c=='ND2')
			{
				$inser_row=$db->query("INSERT INTO ndtwo (email,surname,firstname,othername,class,password,image) VALUES('$r','$s','$f','$o','$c','$p','$im')");
				if($inser_row)
				{echo "<script>window.alert('Your username and password  have been successfully submitted')</script>";}
			}
			else
			{
			echo "<script>window.alert('Sorry! There is some problem.')</script>";
			}
	
	}
	else
	{
	
	echo "<script>window.alert('Sorry! There is some problem.')</script>";
	}
	
	}
	?>
	