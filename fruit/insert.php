<?php
include("config.php");
@extract($_POST);
$sql="INSERT INTO `shop`(`id`, `name`, `kg`, `price`) VALUES (NULL,'$name','$kg','$price')";
echo($sql);
mysqli_query($con,$sql);
?>