<?php
// $update_id = $_GET['id'];//here also possible to retrive that id (from data_retrive page)
include("database_connect.php");
$update_id = $_GET['id'];//that selected id (from data_retrive page) is retriving here with get here id is not database field name
$data_retrive = pg_query($database_connection,"select * from sign_up where id =".$update_id);
$data_array_fetch = pg_fetch_array($data_retrive);
// print_r($data_array_fetch);
if(isset($_POST['updated'])){
    $name = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $updated_query = pg_query($database_connection,"update sign_up set username='$name', email='$email', password='$password' where id='$update_id'");
    header("location:data_retrive.php");
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
<form action="" method="post" align="center" style="padding-top: 50px;">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-2"><label for=""><b>User name</b></label></div>
                <div class="col-2"><input type="text" name="user_name" id="" class="form-control" value="<?php echo $data_array_fetch[1];?>"></div>
                <div class="col-4"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-2"><label for=""><b>Email</b></label></div>
                <div class="col-2"><input type="text" name="email" id="" class="form-control" value="<?php echo $data_array_fetch[2];?>"></div>
                <div class="col-4"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-2"><label for=""><b>Password</b></label></div>
                <div class="col-2"><input type="text" name="password" id="" class="form-control" value="<?php echo $data_array_fetch[3];?>"></div>
                <div class="col-4"></div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-5"></div>
                <div class="col-2">
                    <button type="submit" class=" btn-dark form-control" name="updated">Update</button>
                </div>
                <div class="col-5"></div>
            </div>

        </form>
</body>
</html>