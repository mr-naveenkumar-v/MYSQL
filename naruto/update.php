<?php
include("config.php");
@extract($_POST);
$sql="UPDATE `naruto` SET `name`='$name',`clan`='$clan',`skills`='$skills' WHERE `id`='$id'";
$con->query($sql);
?>