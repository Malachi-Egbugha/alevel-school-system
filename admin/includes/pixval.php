<?php 
include("includes/clas.php");
$up=$_FILES['upload']['name'];
$tep=$_FILES['upload']['tmp_name'];
$ty=$_FILES['upload']['type'];
$ts=$_FILES['upload']['size'];
$ma=500000;
$fu=new picturevalidate($up,$tep,$ty,$ts,$ma);
$oo=$fu->picval();
?>
