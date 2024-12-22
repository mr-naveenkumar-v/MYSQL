<?php
include('config.php');
@extract($_POST);
$sql="UPDATE `sk` SET `breakfast`='$breakfast',`lunch`='$lunch',`dinner`='$dinner' WHERE `id`='$id'";
$con->query($sql);

?>