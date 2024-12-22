<?php
include("config.php");
@extract($_POST);
$sql = "SELECT * FROM vechile WHERE `id`=".$_GET['id'];
$res=mysqli_query($con,$sql);
$obj=$res->fetch_object();
$id=$obj->id;
if($obj->status == 0){
    $sql="UPDATE vechile SET status =1 WHERE `id`=".$id;
   
    mysqli_query($con,$sql);
    header("location:table.php?err=1");
    //echo "<script>window.location='table.php?err=1';</script>";

}
else{
    $sql="UPDATE vechile SET status=0 WHERE `id`=".$id;
   
    mysqli_query($con,$sql);
    header("location:table.php?err=2");
   // echo "<script>window.location='table.php?err=2';</script>";
}

?>

