<?php
include "brokenlink.php";

$total=$_POST['URLs'];
 


$keyarr=explode("\n",$total);
// In order to  process this  array  values  here is the code 
//var_dump($keyarr);
foreach($keyarr  as  $key=>$value)
{
   //  becareful to check the value for  empty line 
  $value=trim($value);
   if  (!empty($value))
   {
     brokenlinker($value);

        // Carry out your  own operations 
   }
}

?>