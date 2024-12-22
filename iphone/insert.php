<?php
include("config.php");
@extract($_POST);
$sql="INSERT INTO `details`(`id`, `model`, `Gp`, `price`) VALUES (NULL,'$model','$Gp','$price')";
echo($sql);
mysqli_query($con,$sql)
?>