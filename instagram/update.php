<?php
include("config.php");
@extract($_POST);
$sql="UPDATE `details` SET `name`='$name',`password`='$password',`email`='$email'WHERE `id`='$id'";
$con->query($sql);
?>