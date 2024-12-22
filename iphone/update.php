<?php
include("config.php");
extract($_POST);
$sql="UPDATE `details` SET `model`='$model',`Gp`='$Gp',`price`='$price' WHERE `id`='$id'";
$con->query($sql);
?>