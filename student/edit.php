<?php
include("config.php");
@extract($_POST);
$sql="SELECT * FROM details WHERE id=".$_GET['id'];
$res=$con->query($sql);
$obj=$res->fetch_object();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            display: flex;
            flex-direction: column;
            width: 300px;
        }
        label {
            margin-top: 10px;
        }
        input[type="text"],
        input[type="tel"] {
            padding: 8px;
            margin-top: 5px;
        }
        input[type="submit"] {
            margin-top: 20px;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="update.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required value="<?php  echo $obj->name; ?>">
        <input type ="hidden" id ='id' name='id' value="<?php echo $_GET['id']?>">

        <label for="class">Class:</label>
        <input type="text" id="class" name="class" required value="<?php echo $obj->class;?>">

        <label for="phone">Phone:</label>
        <input type="number" id="phone" name="phone" required value="<?php  echo $obj->phone;?>">


        <input type="submit" value="Submit">
    </form>
</body>
</html>
