<?php
include("config.php");
@extract($_POST);
$sql="SELECT * FROM details ORDER BY id";
$res=$con->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-t">
        <title>Admin</title>
        <style>
            body{
                background-color: #f1f1f1;
                }
               table{
                width: 100%;
                border-collapse: collapse;

               }
               th,td{
                border: 1px solid #ddd;
                padding: 8px;
                text-align:center;
                }
               
                                </style>
            
    </head>
    <body>
   
                    <table>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>price</th>
                            <th>country</th>
                            <th>edit</th>
                            <th>delete</th>
                        </tr>
                    
                    <?php
                    if($res=$con->query($sql)){
                        while($row=$res->fetch_object()){
                            ?>
                            <tr>
                                <td><?php echo $row->id; ?></td>
                                <td><?php echo $row->name; ?></td>
                                <td><?php echo $row->price; ?></td>
                                <td><?php echo $row->country; ?></td>
                                <td><a href="edit.php?id=<?php echo $row->id; ?>">Edit  </a></td>                                               
                              <td><a href="delete.php?id=<?php echo $row->id; ?>">Delete</a></td>
                            </tr>
                        <?php
                        }
                    }?>
                 </table>

    </body>
</html>