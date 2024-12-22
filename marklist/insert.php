<?php
include("config.php");
@extract($_POST);
$sql="INSERT INTO `details`(`id`, `roll_no`, `name`, `total_mark`) VALUES (NULL,'$roll_no','$name','$total_mark')";
echo ($sql);
mysqli_query($con,$sql);
?>