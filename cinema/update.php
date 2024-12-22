
<?php
include("config.php");
@extract($_POST);
$sql="UPDATE actor SET `name`='$name',`movies`='$movies',`blockbuster`='$blockbuster' WHERE id='$id'";
$connection->query($sql);
?>
