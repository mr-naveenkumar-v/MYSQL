<?php
include("config.php");
@extracT($_POST);
$sql="SELECT * FROM shop WHERE id=".$_GET['id'];
$res=$con->query($sql);
$obj=$res->fetch_object();
$selva=$obj->id;

if($obj->status==0){
    $sql="UPDATE shop SET status=1 WHERE `id`=".$selva;
    mysqli_query($con,$sql);
    header("location:table.php?err=1");
}
else{
    $sql="UPDATE shop SET status=0 WHERE `id`=".$selva;
    mysqli_query($con,$sql);
    header("location:table.php?err=2");
}


?>