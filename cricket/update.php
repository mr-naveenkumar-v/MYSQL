<?php
include("config.php");
@extract($_POST);
$sql="UPDATE `cricket` SET `name`='$name',`skills`='$skills',`runs`='$runs' WHERE id='$id'";
$con->query($sql);
?>