<?php
include("config.php");
@extract($_POST);
$sql=" SELECT * FROM details WHERE id =".$_GET['id'];
$res=$con->query($sql);
$obj=$res->fetch_object();
?>
<DOCtype html>
<DOCTYPE html>
    <html>
        <head>
            <title>bike</title>
            <style>
                body {
                    background-image:url(C:\wamp64\www\db\bikes\bike4.png);
                    margin:0%;
                    padding:0%;
                    
                }
                form{
                    color: #000000;
                    border:2px solid white;
                    max-height:500px;
                    max-width:500px;                
                }
               label{
                font-size:35px;
               }
                .container{
                    display: flex;
                    justify-content: center;
                    align-items:center;
                    height:100vh;
                    
                }
                .center {
            padding: 20px;
          
        }
        button{
            background-color: red;
            color: #ffffff;
            text-align:center;
            padding:10px;
            border-radius:10px;
            
        
        }
        form button{
            margin-left:40%;
        }
       
            </style>
        </head>
        <body>
        <div class="container">
            <div class="center">
            <form action="update.php" method="POST">
                <label for="name">NAME:</label>
                <input type="text" id="name" name="name" value="<?php echo $obj->name;?>">
                <input type="hidden" id="id" name="id" value="<?php echo $_GET['id']?>">
                <br>
                <label for="mailage">Mailage:</label>
                <input type="text" id="mailage" name="mailage" value="<?php echo $obj->mailage;?>">
                <br>
                <label for="price">Price:</label>
                <input type="text" id="price" name="price" value="<?php echo $obj->price;?>">
                <br>
                <button>submit</button>
            </form>
            </div>
            </div>
        </body>
        </html>