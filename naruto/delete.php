<?php
include("config.php");
@extract($_POST);
$sql="DELETE FROM `naruto` where id=".$_GET['id'];
$con->query($sql);
?>