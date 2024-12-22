<?php
include("config.php");
@extract($_POST);
$sql="SELECT *FROM it WHERE id=".$_GET['id'];
$res=$con->query($sql);
$obj=$res->fetch_object();
?>
<DOCTYPE html>
    <html lang='en'>
        <head>
            <meta charset='utf-8'>
            <title>HTML5</title>
        </head>
         <body>
            <form action='update.php' method='POST'>
                <label for='name'>NAME:</label>
                <input type='text' id='name' name='name' placeholder='Enter your name'value="<?php  echo $obj->name; ?>" required><br><br>
                    <input type='hidden' name='id' id='id' value="<?php echo $_GET['id'];?>">
                <br>
                <label for='courses'>COURSES:</label>
                <input type ='text' name='courses' id='courses'placeholder='Enter your courses' value="<?php echo $obj->courses; ?>" required><br><br>               <br>
                <label for='fees'>FEES:</label>
                <input type='text' name='fees' id='fees'placeholder='Enter  fees' value="<?php echo $obj->courses; ?>" required><br><br>
                <br>
                <button>submit</button>
                


            </form>

         </body>
    </html>