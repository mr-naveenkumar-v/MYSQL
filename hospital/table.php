<?php
include("config.php");
extract($_POST);
$sql="SELECT * FROM details ORDER BY id";
$res=$con->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <style>
            body{
                background-color: #f1f1f1;
                }
               table{
                width: 100%;
                border-collapse: collapse;

               }
               th,td{
                border: 3px solid #ddd;
                padding: 8px;
                text-align:center;
                }
               
                                </style>

</head>
<body>
    <table>
        <tr>
            <th>Id</th>
            <th>Patient_name</th>
            <th>Disease</th>
            <th>Age</th>
            <th>Phone</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>status</th>
        </tr>
        <?php
        if($res=$con->query($sql)){
            while($row=$res->fetch_object()){
        ?>
        <tr>
            <td><?php echo $row->id;?></td>
            <td><?php echo $row->patient_name;?></td>
            <td><?php echo $row->disease;?></td>
            <td><?php echo $row->age;?></td>
            <td><?php echo $row->phone;?></td>
            <td><a href="edit.php?id=<?php echo $row->id;?>">Edit</a></td>
            <td><a href="delete.php?id=<?php echo $row->id;?>">Delete</a></td>

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
