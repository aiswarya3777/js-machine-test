<?php
include("database_connect.php");//we include the connected database page
if(isset( $_POST['btn'])){
    //taking the values from form
   $username = $_POST['user_name'];
   $email = $_POST['email'];
   $password = $_POST['password'];

   //insert query
   $insert_query = "insert into sign_up (username,email,password) values ('$username','$email','$password')";
   //connect query with database
   pg_query($database_connection,$insert_query);//this function is used to connect a specific db
   header("location:data_retrive.php");

}
// if(pg_query($database_connection,$insert_query)){
//     echo "Data Inserted";
// }else{
//     echo "Failed to insert";
// }
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