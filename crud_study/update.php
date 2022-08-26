<?php
include('database_connect_study.php');
$id = $_GET['id'];
$data_retrive = pg_query($db_connect,"select * from sign_up where id=".$id);
$data_fetch = pg_fetch_array($data_retrive);
if(isset($_POST['btn'])){
    $name = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $data_updated = pg_query($db_connect,"update sign_up set username='$name',email='$email',password='$pass' where id='$id'");
    header("location:view_details.php");
}
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
    <form action="" method="post">
    <label for="">User name</label>
    <input type="text" name="username" id="" value="<?php echo $data_fetch['username'];?>"><br>
    <label for="">Email</label>
    <input type="text" name="email" id="" value="<?php echo $data_fetch['email'];?>"><br>
    <label for="">Password</label>
    <input type="text" name="pass" id="" value="<?php echo $data_fetch['password'];?>">
    <button type="submit" name="btn">Update</button>
    </form>
    
</body>
</html>