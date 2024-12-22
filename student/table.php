<?php
include("config.php");
@extract($_POST);
$sql="SELECT * FROM details ORDER BY id";
$res= $con->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <style> 
        body{
            background-color: #f5f5f5;
            margin:0%;
            padding:0%;
            display flex: center;
            justify-content: center;
            align-items: center;


        }
        table{
            height:50vh;
            width: 100%;
            margin: 0 auto;
            border-collapse: collapse;
            text-align:center

        }
        table,th,td{
            border: 1px solid black;

        }
        th{
            font-size:20px;
            font-weight: bold;
            background-color:#5484;
            color:#f5d;
        }
        th {

            background-color:#fdf;

        }
        td{
            font-size: 18px;
            font-weight: bold;
            background-color:#8488;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              



    <table>
        <tr>
            
            <th>ID</th>
            <th>NAME</th>
            <th>CLASS</th>
            <th>PHONE</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        <?php
            if($res= $con->query($sql)){
            while($row=$res->fetch_object()){
        ?>
        <tr>
                <td><?php echo $row->id; ?></td>
                <td><?php echo $row->name; ?></td>
                 <td><?php echo $row->class; ?></td>
                 <td><?php echo $row->phone; ?></td>
                 <td><a href="edit.php?id=<?php echo $row->id; ?>">Edit</a></td>
                 <td><a href="delete.php?id=<?php echo $row->id; ?>">Delete</a></td>
       </tr>
                <?php
                     }
                    }
                ?>
                </table>
                </div>
        </div>
                
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>