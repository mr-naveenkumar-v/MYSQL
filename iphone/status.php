<?php
include("config.php");

// Get the ID from the URL
$id = $_GET['id'];

// Step 1: Check the current status of the item
$sql = "SELECT * FROM details WHERE id = $id";

$res = mysqli_query($con, $sql);
$obj = mysqli_fetch_object($res);

if ($obj) {
    // Step 2: Toggle the status
    if ($obj->status == 0) {
        $sql = "UPDATE details SET status = 1 WHERE id = $id"; // Activate
    } else {
        $sql = "UPDATE details SET status = 0 WHERE id = $id"; // Deactivate
    }
    
    // Execute the update query
    mysqli_query($con, $sql);
    
    // Step 3: Redirect back to the table page
    header("Location: table.php?msg=Status updated");
    exit();
} else {
    // Handle case where ID is not found
    header("Location: table.php?msg=Error: Item not found");
    exit();
}
?>
