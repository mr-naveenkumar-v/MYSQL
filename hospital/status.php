<?php/*
include("config.php");
$id = $_GET['id']; // Get ID from the URL

// Fix SQL query
$sql = "SELECT * FROM `details` WHERE id=$id"; // Use backticks for table names
$res = mysqli_query($con, $sql);
$obj = $res->fetch_object();

if ($obj) {
    $var = $obj->id; // Access property without parentheses

    if ($obj->status == 0) {
        $sql = "UPDATE details SET status=1 WHERE id=$var"; // Remove backticks here
        mysqli_query($con, $sql);
        header("Location: table.php?err=1");
        exit(); // Exit after header redirect
    } else {
        $sql = "UPDATE details SET status=0 WHERE id=$var"; // Remove backticks here
        mysqli_query($con, $sql);
        header("Location: table.php?err=2");
        exit(); // Exit after header redirect
    }
} else {
    // Handle the case where the object is not found
    header("Location: table.php?err=3"); // Redirect or handle error
    exit();
}
?>
*/
<?php
include("config.php");
@extract($_POST);
$sql = "SELECT * FROM  details WHERE `id`=".$_GET['id'];
$res=mysqli_query($con,$sql);
$obj=$res->fetch_object();
$id=$obj->id;
if($obj->status == 0){
    $sql="UPDATE  details SET status =1 WHERE `id`=".$id;
   
    mysqli_query($con,$sql);
    header("location:table.php?err=1");
    //echo "<script>window.location='table.php?err=1';</script>";

}
else{
    $sql="UPDATE  details SET status=0 WHERE `id`=".$id;
   
    mysqli_query($con,$sql);
    header("location:table.php?err=2");
   // echo "<script>window.location='table.php?err=2';</script>";
}

?>


