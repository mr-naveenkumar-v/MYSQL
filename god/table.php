<?php
include("config.php");
@extract($_POST);
$sql="SELECT * FROM god ORDER BY id";
$res=$con->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
       
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to">
        <title>table</title>
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
            <th>location</th>
            <th>religion</th>
            <th>EDIT</th>
            <th>DELETE</th>
            <th>STATUS</th>
        </tr>
        <?php
           if($res=$con->query($sql)){
               while($row=$res->fetch_object()){     
        ?>
        <tr>
            <td><?php echo $row->id;?></td>
            <td> <?php echo $row->name;?></td>
            <td> <?php echo $row->location;?></td>
            <td> <?php echo $row->religion;?></td>
            <td><a href="edit.php?id=<?php echo $row->id; ?>">Edit</a></td>
            <td><a href="delete.php?id=<?php echo $row->id; ?>">Delete</a></td>
            <?php
            @extract($_GET);
            if($row->status== '1')
                {
                    $a= "inactivate";
                    }
                
                        else{
                            $a= "activate";
                        }


                ?>
                     <td><a href="status.php?id=<?php echo $row->id;?>"><?php echo $a;?></a></td>
        </tr>
        <?php
            }
            }
        ?>
    </table>

</body>
</html>