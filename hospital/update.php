<?php
include("config.php");
extract($_POST);
$sql="UPDATE `details` SET `patient_name`='$patient_name',`disease`='$disease',`age`='$age',`phone`='$phone' WHERE `id`='$id'";
$con->query($sql);
?>