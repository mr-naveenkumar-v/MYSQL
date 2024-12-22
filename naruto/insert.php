<?php
include("config.php");
@extract($_POST);
@$sql="INSERT INTO `naruto` (`id`, `name`, `clan`, `skills`) VALUES (NULL, '$name', '$clan', '$skills')";
echo($sql);
mysqli_query($con,$sql);
?>