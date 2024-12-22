<?php
include("config.php");
extract($_POST);
$sql="INSERT INTO `details`(`id`, `patient_name`, `disease`, `age`, `phone`) VALUES (NULL,'$patient_name','$disease','$age','$phone')";
echo ($sql);
mysqli_query($con,$sql);
?>