<?php
include("config.php");
@extract($_POST);
$sql="DELETE FROM it WHERE id=".$_GET['id'];
$con->query($sql);
?>