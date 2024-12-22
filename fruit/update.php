<?php
include("config.php");
@extract($_POST);
$sql="UPDATE `shop` SET `name`='$name',`kg`='$kg',`price`='$price'WHERE `id`='$id'";
$con->query($sql);
?>