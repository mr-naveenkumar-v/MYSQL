<?php
include("config.php");
@extract($_POST);
$sql="SELECT * FROM naruto WHERE id=".$_GET['id'];
$res=$con->query($sql);
$obj=$res->fetch_object();
?>
<!DOCTYPE html>
<html en="lang">
    <head>
        <meta>
        </meta>
        <style>

        </style>
</head>
<body>
    <div class="container">
        <form action="update.php" method="POST">
            <label>NAME:</label>
            <input type="text" name="name" id="name" value="<?php echo $obj->name;?>"> <br><br>
            <input type="hidden" name='id' id='id' value="<?php echo $_GET['id']?>">
            <label>CLAN</label>
            <input type="text" name="clan" id="clan"value="<?php echo $obj->clan;?>"><br><br>
            <label>SKILLS</label>
            <input type="text"name="skills" id="skills"value="<?php echo $obj->skills;?>"><br><br>
                <button>submit</button>

        </form>
    </div>
 </body>
</html>