<?php
include("config.php");
@extract($_POST);
$sql="DELETE FROM cricket WHERE id=".$_GET['id'];
$con->query($sql);
?>