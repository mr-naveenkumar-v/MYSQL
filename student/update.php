<?php
include("config.php");
@extract($_POST);
$sql="UPDATE `details` SET `name`='$name',`class`='$class',`phone`='$phone' WHERE id='$id'";
$con->query($sql);

?>