<?php
include("config.php");
@extract($_POST);
$sql="SELECT * FROM details ORDER BY id";
$res=$con->query($sql);
?>
<DOCTYPE html>
    <html lang="en">
        <head>
            <title> instagram</title>
        <style>
            body{
                background-color:#842;
            }
            table{
                width:100%;
                border-collapse:collapse;

            }
            table,th,td{
                border:1px solid black;
                text-align:center;
                padding:7px;
            }


        </style>
</head>
<body>
    <table>
    <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>PASSWORD</th>
            <th>EMAIL</th>
            <th>EDIT</th>
            <th>DELETE</th>
            <th>STATUS</th>
    </tr>
    <?php
           if($res=$con->query($sql)){
               while($row=$res->fetch_object()){     
        ?>
         <tr>
                        <td><?php echo $row->id; ?></td>
                        <td><?php echo $row->name; ?></td>
                        <td><?php echo $row->password; ?></td>
                        <td><?php echo $row->email; ?></td>
                        <td><a href='edit.php?id=<?php echo $row->id;?>'> edit</a></td>
                        <td><a href='delete.php?id=<?php echo $row->id;?>'> delete</a></td>                       
                    </tr>
                    <?php
                        }
                        }
                    ?>

</table>    
</body>
</html>

