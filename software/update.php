<?php
include("config.php");
@extract($_POST);
$sql="UPDATE `it` SET `name`='$name',`courses`='$courses',`fees`='$fees' WHERE id='$id'";
$con->query($sql);
?>