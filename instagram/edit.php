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

        </head>
        <body>
            <form action="update.php" method="POST">
                 <label for="name">NAME:</label>
                <input type="text" id="name" name="name" value="<?php echo $obj->name?>">
                <input type="hidden" id="id" name="id" value="<?php echo $_GET['id']?>">
                <br>
                <label for="password">PASSWORD:</label>
                <input type="text" id="password" name="password"value="<?php echo $obj->password?>" >
                <br>
                <label for="email">EMAIL:</label>
                <input type="email" id="email" name="email"value="<?php echo $obj->password?>">
                <br>
                <button>submit</button>                

            </form>
        </body>
        </html>
    