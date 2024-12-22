<?php
include("config.php");
@extract($_POST);
$sql="UPDATE `details` SET `name`='$name',`price`='$price',`country`='$country' WHERE `id`='$id'";
$con->query($sql);
?>