<?php
include("config.php");
@extract($_POST);
$sql="SELECT * FROM sk WHERE id=".$_GET['id'];
$res=$con->query($sql);
$obj=$res->fetch_object();
?>
<DOCTYPE html>
<html en="lang">
    <head>
            <title>SK HOTEL</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <style>
                    body{
                        background-color: #f2f2f2;
                        margin:0;
                        padding:0;
                        font-family: 'Open Sans', sans-serif;

                    }
                    form{
                     
                        text-align:center;
                        display:flex;
                        justify-content:center;
                        align-items:center;
                        display:inline;    
                     
                    
                    }
                    label{
                        font-size: 20px;
                        font-weight: bold;
                        float:center;
                    }
                    input[type=text], input[type=password]{
                        width: 100%;
                        padding: 12px 20px;
                        margin: 8px 0;
                        display: inline-block;
                        border: 1px solid #ccc;
                        box-sizing: border-box;
                        }
                        button{
                            background-color: #4CAF50;
                            color: white;
                            padding: 14px 20px;
                            margin: 8px 0;
                        }               


            </style>
            
</head>
<body>
    <form action="update.php" method="POST">
        <label for="breakfast">BREAKFAST:</label>
        <input type="text" id="breakfast" name="breakfast" value="<?php echo $obj->breakfast?>"><br><br>
        <input type="hidden" id='id' name='id' value=<?php echo $_GET['id'];?>>
        <label for="lunch">LUNCH:</label>
        <input type="text" id="lunch" name="lunch" value="<?php  echo $obj->lunch?>"><br><br>

        <label for="dinner">DINNER:</label>
        <input type="text" id="dinner" name="dinner" value="<?php echo $obj->dinner?>"><br><br>

        <BUTTON>SUBMIT</button>
        
</form>
</body>
</html>