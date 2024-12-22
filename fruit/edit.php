<?php
include("config.php");
@extract($_POST);
$sql="SELECT * FROM shop WHERE id=".$_GET['id'];
$res=$con->query($sql);
$obj=$res->fetch_object();
?>
<DOCTYPE html>
    <head>
<style>
    body{
        
        background-color:#6265;
    }
    form{
        
        display:inline-block;
        font-size:20px;
       
        text-align:center;

    }
    input{
        padding:10px;
        background-color:#2697;
        font-size:14px;
    }
    .name{
        text-align:center;
        padding:50px;

    }
    .html{
        text-align:center;
        height:40vh;
        width:40%;
        border:10px solid green;
        padding:10px;
       margin-left:500px;
        margin-top:500px;
        
        
    }
    button{
        background-color:skyblue;
        padding:8px;
        font-size:15px;
        width:50%;
        text-align:center;
    }
</style>
</head>
<body>
    <div class="html">
         <form action="update.php" method="POST">       
            <div class="name">   NAME: <input type="text" name="name" id="name" value="<?php echo $obj->name?>"><br><br>
            <input type="hidden" name="id" id="id" value="<?php echo $_GET['id']?>">

            KGs :  <input type="text" name='kg' id='kg' value="<?php  echo $obj->kg?>"><br><br>

            PRICE: <input type='text' name='price' id='price' value="<?php  echo $obj->price?>"><br><br>

            <button> Submit</button> 
         </div>
         </form>
    </div>
</body>