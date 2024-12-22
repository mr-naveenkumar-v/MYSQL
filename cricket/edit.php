<?php
include("config.php");
@extract($_POST);
$sql=" SELECT * FROM cricket WHERE id =".$_GET['id'];
$res=$con->query($sql);
$obj=$res->fetch_object();
?>
<DOCTYPE html>
    <html>
        <head>
            <title>My First Web Page</title>
            <style>
                body {
                    background-color: #6998;
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
                <input type="text" id="name" name="name" value="<?php echo $obj->name; ?>" required><br><br>
                <input type="hidden" id='id' name='id' value='<?php echo $_GET['id'];?>'>   
                <br>
                <label for="skills">SKILLS:</label>
                <input type="text" id="skills" name="skills" value="<?php  echo $obj->skills; ?>" required><br><br>
                <br>
                <label for="runs">RUNS:</label>
                <input type="number" id="runs" name="runs" value="<?php echo $obj->runs; ?>" required><br><br>
                <br>
                <button>submit</button>
            </form>
            </div>
            </div>
        </body>
        </html>