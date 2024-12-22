<?php
include("config.php");
@extract($_POST);
$sql="DELETE FROM sk WHERE id=".$_GET['id'];
$con->query($sql);
?>