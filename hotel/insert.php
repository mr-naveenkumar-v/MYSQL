<?php
include("config.php");
@extract($_POST);
$sql="INSERT INTO `sk`(`id`, `breakfast`, `lunch`, `dinner`) VALUES (NULL,'$breakfast','$lunch','$dinner')";
echo ($sql);
mysqli_query($con,$sql);
?>