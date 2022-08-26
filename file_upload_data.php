<?php
include("database_connect.php");
$data_retrive = pg_query($database_connection,"select * from student");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php 
   while($display = pg_fetch_array($data_retrive)){

   
   ?>
<div>
        <div style="display: inline-block;">
        <label for="">Name :</label>
            <input type="text" name="" id="" value="<?php echo $display[1];?>">
        </div>
        <div style="display: inline-block;">
        <label for="">Class :</label>
            <input type="text" name="" id="" value="<?php echo $display[2];?>">
        </div> 
        <div style="display: inline-block;">
        <label for="">Photo :</label>
            <img src="<?php echo $display[3];?>" alt="" width="220px" height="150px">
        </div> 
         
    </div>
    <?php
   }
    ?>
</body>
</html>