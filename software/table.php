<?php
include('config.php');
@extract($_POST);
$sql="SELECT * FROM it WHERE id";
$selva=$con->query($sql);
?>
<DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to">
            <title>IT</title>
            <style>
                body{
                    background-color: #f2f2f2;
                    }
                    .container{
                        width: 100%;
                        margin: 0 auto;

                    }
                    .container .row{
                        width: 100%;
                      
                     
                    }
                    table{
                            width: 100%;
                            border-collapse:collapse;
                            background-color:brown;
                            }
                  table,th,td  {
                            border: 1px solid black;
                            text-align:center;
                    }
                    th,td{
                      
                        font-size:20px;
                    }

                        h1{
                            font-size: 30px;
                            text-align:center;
                        }
                </style>
        </head>
        <body>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>IT</h1>
                        <table class=" table-bordered">
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>COURSES</th>
                                <th>FEES</th>
                                <th>EDIT</th>
                                <th>DELETE</th>
                            </tr>
                    <?php
                    if($selva=$con->query($sql)){
                        while($row=$selva->fetch_object()){
                    ?>
                    <tr>
                            <td><?php echo $row->id; ?></td>
                            <td><?php echo $row->name; ?></td> 
                            <td><?php echo $row->courses; ?></td>
                            <td><?php echo $row->fees; ?></td>
                            <td><a href="edit.php?id=<?php echo $row->id; ?>">Edit</a></td>
                            <td><a href="delete.php?id=<?php echo $row->id; ?>">Delete</a></td>
                    </tr>
                    <?php
                            }
                            }
                        ?>
        </body> 
    </html>  