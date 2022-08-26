<?php
include("database_connect_study.php");
if(isset($_POST['btn'])){
    $name = $_POST['user_name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $insert = "insert into sign_up (username,email,password) values ('$name' , '$email' , '$pass')";

    pg_query($db_connect,$insert);
    header("location:view_details.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body style="background-image: url('bg4.webp');">
    <div class="container-fluid"  >
        <h3  align="center" style="padding-top: 50px;"><b></b>Sign Up Form</h3>
        <form action="" method="post" align="center" style="padding-top: 50px;">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-2"><label for=""><b>User name</b></label></div>
                <div class="col-2"><input type="text" name="user_name" id="" class="form-control"></div>
                <div class="col-4"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-2"><label for=""><b>Email</b></label></div>
                <div class="col-2"><input type="text" name="email" id="" class="form-control"></div>
                <div class="col-4"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-2"><label for=""><b>Password</b></label></div>
                <div class="col-2"><input type="text" name="password" id="" class="form-control"></div>
                <div class="col-4"></div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-5"></div>
                <div class="col-2">
                    <button type="submit" class=" btn-dark form-control" name="btn">Submit</button>
                </div>
                <div class="col-5"></div>
            </div>

        </form>

    </div>

</body>

</html>