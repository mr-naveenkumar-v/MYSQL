<?php
include("config.php");
@extract($_POST);
$sql="SELECT * FROM actor WHERE id=".$_GET['id'];
$res=$connection->query($sql);
$obj=$res->fetch_object();
?>
<DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>ENTERTAINMENT</title>
        </head>
<body>
<form action="update.php" method="POST">
        <label for="name">NAME:</label>
        <input type="text" id="name" name="name" value="<?php echo $obj->name;?>">
        <input type="hidden" id="id" name="id" value="<?php echo $_GET['id']?>">
        <br>
        <label for="movies">MOVIES:</label>
        <input type="text" id="movies" name="movies" value="<?php echo $obj->movies;?>">
        <br>
        <label for="blockbuster">BLOCKBUSTER:</label>
        <input type="text" id="blockbuster" name="blockbuster" value="<?php echo $obj->blockbuster;?>">
        <br>
        <button>submit</button>
    </form>

</body>
</html>