
  <!-- length syntex:strlen()
  <?php
$name=$_POST['Name'];
$length=strlen($name);
echo $length;
?>
-->
 <!-- lowercase syntex: strtolower()
<?php
$name=$_POST['Name'];
$lower=strtolower($name);
echo $lower;

?>
-->
<!--uppercase syntex: strtoupper()
<?php
$name=$_POST['Name'];
$upper=strtoupper($name);
echo $upper;

?>
-->
<!-- Revers syntex: strrev()
<?php
$name=$_POST['Name'];
$revers=strrev($name);
echo $revers;
?>
-->
<!-- trim syntex: trim(string,charlist)
<?php
$name=$_POST['Name'];
$string=trim($name,"selva");
echo $string;
?>
-->
<!-- replace syntex: substr_replace(string,replacement,start,length)
<?php
$name=$_POST['Name'];
$replace=substr_replace($name,"naveen",0);
echo $replace
?>
-->
<!--bin2hex
<?php
$name=$_POST['Name'];
$hex=bin2hex($name);
echo $hex;
?>
-->
<!-- wordwrap syntex=wordwarp(string,width,"<br>\n")
<?php
$name=$_POST['Name'];
$word=wordwrap($name,40,"<br>\n");
echo $word;
?>
-->
<!--
<?php
$name=$_POST['Name'];
$md=md5($name);
echo $md;
if(md5($name) == "b5c0b187fe309af0f4d35982fd961d7e"){
  echo "<br> selvaganapathy";
  exit;

}
?>
-->
<!--(every word first letter should be Capital )ucwords syntex: ucwords(string) or ucfirst(string)
<?php
$name=$_POST['Name'];
$uc=ucwords($name);
echo $uc;
?>
-->
<!--(every word first letter should be small )lcfirst syntex : lcfirst(string)
<?php
$helo=$_POST['Name'];
$lc=lcfirst($helo);
echo $lc;
?>
-->

<!--(every word first letter should be Capital )ucwords syntex: ucwords(string) or ucfirst
<?php/*
$name=$_POST['Name'];
$count=substr_count($name,"is");
echo $count;
*/
?>
-->
