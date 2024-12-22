<?php
include("config.php");
@extract($_POST);
$sql="SELECT * FROM actor ORDER BY id";
$res=$connection->query($sql);
?>

<DOCTYPE html>
    <html>
        <head>
            <title>My First Web Page</title>
            <link rel="stylesheet" href="style.css">
            <style>
                body{
                    background-color: #664;
                }
                table{
                    border-collapse: collapse;
                    width:100%;
                    text-align:center;
                 font-family: "Lucida Console", "Courier New", monospace;
                }
                table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
                }
                th, td {
                padding: 15px;

                }
                th{
                    background-color: #4CAF50;
                    font-size:25px;
                }
                .table,th,td{
                    
                    text-decoration:none;
                }
                
                </style>

            </head>
            <body>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>MOVIES</th>
                        <th>BLOCKBUSTER</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
                     </tr>
                     <?php
                     if($res=$connection->query($sql)){
                        while($row=$res->fetch_object()){
                           // print_r($row);
                     ?>
                     <tr>
                        <td><?php echo $row->id; ?></td>
                        <td><?php echo $row->name; ?></td>
                        <td><?php echo $row->movies; ?></td>
                        <td><?php echo $row->blockbuster; ?></td>
                        <td ><a href="edit.php?id=<?php echo $row->id; ?>">Edit</td>
                        <td><a href="delete.php?id=<?php echo $row->id; ?>">Delete</td>
                        </tr>
                        <?php
                        }
                        }
                        else{   
                            echo "Error: " . $sql . "<br>" . $con->error;
                            }
                            
                            ?>
            
                </table>
            </body>

