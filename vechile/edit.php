<?php
include("config.php");
@extract($_POST);
$sql="  SELECT * FROM vechile WHERE id=".$_GET['id'];
$res=$con->query($sql);
$obj=$res->fetch_object();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to">
        <title>My First Website</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
        </head>
        <body>
            <form action="update.php" method="POST">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required="required" value="<?php echo $obj->name;?>" />
                <input type="hidden" id='id' name='id' value="<?php echo $_GET['id']?>">
                <label for="brand">BRAND:</label>
                <input type="text" name="brand" id="brand" required="required" value="<?php echo $obj->brand;?>"/>
                <label for="price">Price:</label>
                <input type="text" name="price" id="price" required="required" value="<?php echo $obj->price;?>" />
                <button> submit</button>


            </form>




</body>


</html>