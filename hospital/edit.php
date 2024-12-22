<?php
include("config.php");
extract($_POST);
$sql="SELECT * FROM details WHERE id=".$_GET['id'];
$res=$con->query($sql);
$obj=$res->fetch_object();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            font-family:Aerial,sand-serif;
            margin:0px;
            justify-content:center;
            display:flex;
            align-items:center;
            height:100vh;
        }
     
        label{
            padding:0px;
            text-align:center;
       
        }
        label,input,button{
            font-size:25px;
            text-align:center;
            margin-top:30px;
        }
        button{
            background-color:skyblue;
            padding:10px;
            align-items:center;

        }
        button:hover{
            background-color:red;
            cursor:pointer;
        }
        </style>
</head>
<body>
    <form action="update.php" method="POST">
        <label >Patient_name:</label>
            <input type="text" id="patient_name" name="patient_name" placeholder="patient_name" value="<?php echo $obj->patient_name?>"><br>
            <input type="hidden" id="id" name="id" value="<?php echo $_GET['id'];?>">
            <label >Disease:</label>
            <input type="text" id="disease" name="disease" placeholder="disease"value="<?php echo $obj->disease?>" ><br>
            <label >Age:</label>
            <input type="age" id="age" name="age" placeholder="age"value="<?php echo $obj->age?>"><br>
            <label >Phone:</label>
            <input type="number" id="phone" name="phone" placeholder="phone" value="<?php echo $obj->phone?>"><br>
            <button>submit</button>
    </form>
</body>
</html>