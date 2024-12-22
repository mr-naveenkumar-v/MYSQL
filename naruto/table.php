<?php
include("config.php");
@extract($_POST);
$sql="SELECT * FROM naruto ORDER BY id";
$res=$con->query($sql);

?>
<DOCTYPE html>
<html en="lang">
        <title> table</title>
<body>
        <table>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>CLAN</th>
                <th>SKILLS</th>
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
                    <td><?php echo $row->name;?></td>
                    <td><?php echo $row->clan;?></td>
                    <td><?php echo $row->skills;?></td>
                    <td><a href="edit.php?id=<?php echo $row->id;?>">edit </a></td>
                    <td><a href="delete.php?id=<?php echo $row->id;?>">delete </a></td>
                    <td><a href="'php_selftag'"><?php $a?> </a></td>+
                 </tr>
                 <?php
                    }
                }

                 ?>
        </table>



</body>

</html>