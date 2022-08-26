<?php
include("database_connect.php");
$data = pg_query($database_connection,"select * from facebook");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <table style="border:5px solid black ;">
        <tr>
            <td style="border:5px solid black ;">ID</td>
            <td style="border:5px solid black ;">FIRST NAME</td>
            <td style="border:5px solid black ;">LAST NAME</td>
            <td style="border:5px solid black ;">MOBILE</td>
            <td style="border:5px solid black ;">EMAIL</td>
            <td style="border:5px solid black ;">PASSWORD</td>
        </tr>
        <?php
        while($data_array = pg_fetch_array($data)){
        ?>
        <tr>
            <td style="border:5px solid black ;"><?php echo $data_array['id']; ?></td>
            <td style="border:5px solid black ;"><?php echo $data_array['fname']; ?></td>
            <td style="border:5px solid black ;"><?php echo $data_array['lname']; ?></td>
            <td style="border:5px solid black ;"><?php echo $data_array['mobile']; ?></td>
            <td style="border:5px solid black ;"><?php echo $data_array['email']; ?></td>
            <td style="border:5px solid black ;"><?php echo $data_array['password']; ?></td>
        </tr>
        <?php
        }
        ?>

    </table>
</body>
</html>