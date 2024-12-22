<?PHP
include("config.php");
@extract($_POST);
$sql="SELECT * FROM vechile ORDER BY id";
$res=$con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to">
        <title>My First Web Page</title>
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
        <th>ID</th>
        <th>name</th>
        <th>brand</th>
        <th>price</th>
        <th>edit</th>
        <th>delete</th>
        <th>status</th>
    </tr>
    <?php
    if($res=$con->query($sql)){
        while($row=$res->fetch_object()){
    ?>  
    <tr>
        <td><?php echo $row->id; ?></td>
        <td><?php echo $row->name; ?></td>
            <td><?php echo $row->brand; ?></td>
            <td><?php echo $row->price; ?></td>
            <td><a href="edit.php?id=<?php echo $row->id;?>">edit</a></td>
            <td><a href="delete.php?id=<?php echo $row->id;?>">delete</a></td>
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