<?php
include("config.php");
@extract($_POST);
$sql="UPDATE `vechile` SET `name`='$name',`brand`='$brand',`price`='$price' WHERE `id`='$id'";
$con->query($sql);
?>