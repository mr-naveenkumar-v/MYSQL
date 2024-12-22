<?php
include("config.php");
@extract($_POST);
$sql="INSERT INTO `god`(`id`, `name`, `location`, `religion`) VALUES (NULL,'$name','$location','$religion')";
echo($sql);
mysqli_query($con,$sql);
?>