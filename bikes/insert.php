<?php
include("config.php");
@extract($_POST);
$sql="INSERT INTO `details`(`id`, `name`, `mailage`, `price`) VALUES (  null,'$name','$mailage','$price')";
echo($sql);
mysqli_query($con,$sql);
?>