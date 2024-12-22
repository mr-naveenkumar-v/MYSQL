<?PHP
include("config.php");
@extract($_POST);
$sql="SELECT * FROM details ORDER BY id";
$res=$con->query($sql);
?>
<DOCTYPE html>
    <html lang="en">
        <head>
            <title>table</title>
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
                        <th>ID </th>
                        <th> ROLL_N0</th>
                        <th>NAME </th>
                        <th>TOTAL_MARK</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
                    </tr>
                    <?php
                    if($res=$con->query($sql)){
                        while($row=$res->fetch_object()){
                    ?>
                    <tr>
                        <td><?php echo $row->id; ?></td>
                        <td><?php echo $row->roll_no; ?></td>
                        <td><?php echo $row->name; ?></td>
                        <td><?php echo $row->total_mark; ?></td>
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