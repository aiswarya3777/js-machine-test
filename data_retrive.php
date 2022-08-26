<?php
include("database_connect.php");

//data fetching 
$data_retrive = pg_query($database_connection,"select * from sign_up");
// $data_array = pg_fetch_array($data_retrive);
// print_r($data_array);
if(isset($_POST['logout'])){// access the logout button
  session_destroy();
 
  
  // echo "<script>alert('jhkjgvjhv)</script>";

 
  header("location:login.php");
}
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
  <div class="container">
    <form action="" method="post">
      <button type="submit" name="logout" onclick="return logout_alert()">LOGOUT</button>
    </form>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">User Name</th>
          <th scope="col">Email</th>
          <th scope="col">Password</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <?php
//   if(!empty($data_retrive)){

  // $i = 1;//to identify the row id
  while($data_array = pg_fetch_array($data_retrive)){//here we can use pg_fetch_assoc instead of pg_fetch_array
    //for delete
    if(isset($_POST['delete'.$data_array['id']])){
      pg_query( $database_connection,'delete from sign_up where id ='.$data_array['id']);
      // header("location:data_retrive.php");//to redirect to data_retrive.php
      //another method for redirection
      header("location:".$_SERVER["PHP_SELF"]);//PHP_SELF to redirect to same page
    }

    //for update
    if(isset($_POST['update'.$data_array['id']])){
      header("location:update.php?id=".$data_array['id']);
    }
 
//   do{
  ?>
      <tr>
        <td>
          <?php echo $data_array['id']; ?>
        </td>
        <td>
          <?php echo $data_array['username']; ?>
        </td>
        <td>
          <?php echo $data_array['email']; ?>
        </td>
        <td>
          <?php echo $data_array['password']; ?>
        </td>
        <!-- delete -->
        <td>
          <form action="" method="post">
            <button type="submit" name="delete<?php echo $data_array['id'];?>">DELETE</button>
          </form>
        </td>
        <!-- end delete -->
        <!-- update -->
        <td>
          <form action="" method="post">
            <button type="submit" name="update<?php echo $data_array['id']; ?>">UPDATE</button>
          </form>
        </td>
        <!-- endupdate -->
      </tr>
      <?php
    // $i++;
  }
//   }while($data_array = pg_fetch_array($data_retrive));
    ?>
    </table>

  </div>

</body>
<script>
  function logout_alert() {
    var dialogue = "Are You Sure ?";

    if (confirm(dialogue) == true) {
      <?php
      if (isset($_POST['logout'])) {// access the logout button
        session_destroy();

  // echo "<script>alert('jhkjgvjhv)</script>";

header("location:login.php");
}
?>
return true;
}else{
return false;
}
// confirm(dialogue);
}
</script>

</html>