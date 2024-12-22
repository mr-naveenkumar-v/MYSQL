<?php
include("config.php");
@extract($_POST);
$sql="UPDATE `details` SET `name`='$name',`mailage`='$mailage',`price`='$price' WHERE `id`='$id'";
$con->query($sql);
?>