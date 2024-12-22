<?php
include("config.php");
@extract($_POST);
$sql="INSERT INTO `cricket`(`id`, `name`, `skills`, `runs`) VALUES (NULL,'$name','$skills','$runs')";
echo($sql);
mysqli_query($con,$sql);
?>