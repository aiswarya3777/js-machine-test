<?php
include('database_connect_study.php');


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