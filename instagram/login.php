<?php
include("config.php");
@extract($_POST);
$sql="INSERT INTO `details`(`id`, `name`, `password`, `email`) VALUES (NULL,'$name','$password','$email')";
echo($sql);
mysqli_query($con,$sql);

?>