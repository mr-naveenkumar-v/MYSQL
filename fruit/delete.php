<?php
include("config.php");
@extract($_POST);
$sql="DELETE FROM shop WHERE id=".$_GET['id'];
$con->query($sql);
?>