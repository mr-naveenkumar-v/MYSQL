<?php
include("config.php");
@extract($_POST);
$sql="INSERT INTO `it`(`id`, `name`, `courses`, `fees`) VALUES (NULL,'$name','$courses','$fees')";
echo($sql);
mysqli_query($con,$sql);
?>