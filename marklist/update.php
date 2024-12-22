<?php
include("config.php");
@extract($_POST);
$sql="UPDATE `details` SET `roll_no`='$roll_no',`name`='$name',`total_mark`='$total_mark' WHERE id='$id'";
$con->query($sql);
?>