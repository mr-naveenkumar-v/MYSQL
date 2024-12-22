<?php
include("config.php");
@extract($_POST);
$sql="DELETE FROM details WHERE id=".$_GET['id'];
$con->query($sql);
?>