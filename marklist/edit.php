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
        <title>student</title>
        </head>
            <body>
                <form action="update.php" method ="POST">
                  Roll_no:  <input type="text" id="roll_no" name="roll_no" value="<?php echo $obj->roll_no;?>"><br>
                  <input type="hidden" name="id" name="id" value="<?php echo $_GET['id']?>">
                  NAME:  <input  type="text" id="name" name="name" value="<?php echo $obj->name;?>"><br>
                 TOTAL_MARK:   <input  type="text" id="total_mark" name="total_mark"value="<?php echo $obj->total_mark;?>"><br>
                    <button>submit</button>
                    
                </form>
            </body>
    </html>