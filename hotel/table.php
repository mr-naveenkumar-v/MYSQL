<?php
include('config.php');
@extract($_POST);
$sql="SELECT *FROM sk ORDER BY id";
$res=$con->query($sql);
?>
<DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1" />
            <title>Sk</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.">
            <style>
                body{
                    background-color: #f5f5f5;
                        margin:0;
                        padding:0;
                        font-family: 'Open Sans', sans-serif;
                        font-size: 14px;
                        color: #333;
                        }
                table{
                    width: 100%;
                    border-collapse: collapse;
                        }
                table th{
                    background-color: #f5f5f5;
                    padding: 10px;
                    text-align: left;
                    }
                    table td{
                        padding: 10px;
                        }
                        table,th,td{
                            padding: 10px;
                            border:2px solid black;
                        }
                        h1{
                            text-align: center;
                            font-size:35px;
                            color:red;
                            border:1px solid black;
                            
                            
                            
                        }
            </style>

</head>
<body>
    <div class="container">
        <h1>Sk</h1>
        <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>breakfast</th> 
                <th>lunch</th>
                <th>dinner</th>
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
                            <td><?php echo $row ->breakfast; ?></td>
                            <td><?php echo $row ->lunch; ?></td>
                            <td><?php echo $row ->dinner; ?></td>
                            <td><a href='edit.php?id=<?php echo $row->id;?>'> edit</a></td>
                            <td><a href='delete.php?id=<?php echo $row->id;?>'> delete</a></td>
                            <td><a href='status.php?id=<?php echo $row->id;?>'> <?php ?></td>
                    </tr>
                    <?php
                    }
                }?>
  </table>

                    
</body>
</html