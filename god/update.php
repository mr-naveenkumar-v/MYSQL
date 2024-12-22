<?php
include("config.php");
@extract($_POST);
$sql="UPDATE `god` SET `name`='$name',`location`='$location',`religion`='$religion'WHERE `id`='$id'";
$con->query($sql);
?>