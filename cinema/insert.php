<?php
include("config.php");
@extract($_POST);
$sql="INSERT INTO `actor`(`id`, `name`, `movies`, `blockbuster`) VALUES (NULL,'$name','$movies','$blockbuster')";
echo($sql);
mysqli_query($connection,$sql);
?>