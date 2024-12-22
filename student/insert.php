<?php
include("config.php");
@extract($_POST);
$sql="INSERT INTO `details`(`id`, `name`, `class`, `phone`) VALUES (NULL,'$name','$class','$phone')";
echo($sql);
mysqli_query($con,$sql);
?>