<?php
include("config.php");
@extract($_POST);
$sql="DELETE FROM actor WHERE id=".$_GET['id'];
$connection->query($sql);
?>