<?php
include("config.php");
@extract($_POST);
$sql="SELECT * FROM details WHERE id=".$_GET['id'];
$res=$con->query($sql);
$obj=$res->fetch_object();
?>
<DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
</head>
<body>
    <form action="update.php" method="POST">
        <label for="name">NAME</label>
        <input type="text" name="name" id="name" value="<?php echo $obj->name; ?>" required><br><br>
        <input type="hidden" name="id" id="id" value="<?php echo $_GET['id'];?>" required><br><br>
        <label for="price">PRICE</label>
        <input type="text" name="price" id="price" value="<?php  echo $obj->price; ?>" required><br><br>

        <label for="country">COUNTRY</label>
        <input type="text" name="country" id="country" value="<?php  echo $obj->country; ?>" required><br><br>

        <button>submit</button>
    </form>
</body>
</html>