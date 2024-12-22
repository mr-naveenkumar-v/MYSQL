<?php
include("config.php");
@extract($_POST);
@$sql="INSERT INTO `vechile`(`id`, `name`, `brand`, `price`) VALUES (NULL,'$name','$brand','$price')";
echo($sql);
mysqli_query($con,$sql);
?>