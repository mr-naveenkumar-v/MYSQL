<?php
include("config.php");
@extract($_POST);
$sql="DELETE FROM vechile WHERE id=".$_GET['id'];
$con->query($sql);
?>