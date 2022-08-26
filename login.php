<?php
include("database_connect.php");//we include the connected database page
$error_message = '';
if(isset( $_POST['btn'])){
    //taking the values from form
   $email = $_POST['email'];
   $password = $_POST['password'];
   //connect query with database
   $data_retrive = pg_query($database_connection,"select * from sign_up where email='$email'");

   if(pg_num_rows($data_retrive)>0){ // if any details row >0 then lon
   $check  = pg_fetch_array($data_retrive);
   $email_retrive = $check[2];//fetching from datavase
   $password_retrive = $check[3];
   echo $email_retrive,"<br>",$password_retrive;

   
   if($email == $email_retrive && $password==$password_retrive){
// session crreated
    session_start();//start a session
    $_SESSION['user'] = $check[0];// user is session name we are giving the name(session id)
//session created

    header("location:data_retrive.php");
   }else{
    $error_message = "login failed";
   }
   } 
   else{
    $error_message = "login failed";
    }

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
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <style>
    body {
      padding-top: 60px;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1 style="text-align:center ;">Login Form</h1>
    <div class="col-2"></div>

    <form method="post">
      <!-- Email input -->
      <div class="form-outline mb-4">
        <input type="email" id="form2Example1" class="form-control" name="email" />
        <label class="form-label" for="form2Example1">Email address</label>
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4">
        <input type="password" id="form2Example2" class="form-control" name="password" />
        <label class="form-label" for="form2Example2">Password</label>
      </div>

      <!-- 2 column grid layout for inline styling -->
      <div class="row mb-4">
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4" name="btn">Sign in</button>
      </div>
     
    </form>
    <p>
      <?php echo $error_message; ?>
    </p>
    <div class="col-2"></div>
  </div>
</body>

</html>