<?php
include("config.php");
@extract($_POST);
$sql="INSERT INTO `details`(`id`, `name`, `price`, `country`) VALUES (NULL,'$name','$price','$country')";
echo($sql);
mysqli_query($con,$sql);
?>