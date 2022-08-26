<?php
include('database_connect_study.php');
$data_retrive = pg_query($db_connect,"select * from sign_up");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">USER NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">PASSWORD</th>
      <th scope="col">UPDATE</th>
      <th scope="col">DELETE</th>
    </tr>
  </thead>
  <?php
while($data = pg_fetch_array($data_retrive)){
//update
if(isset($_POST['update'.$data['id']])){
    header("location:update.php?id=".$data['id']);
}

//delete
if(isset($_POST['delete'.$data['id']])){
    pg_query($db_connect,'delete from sign_up where id='.$data['id']);
    header("location:".$_SERVER['PHP_SELF']);
}

?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $data['id'];  ?></th>
      <td><?php echo $data['username']  ?></td>
      <td><?php echo $data['email'] ?></td>
      <td><?php echo $data['password'] ?></td>
      <form action="" method="post">
        <td><button type="submit" name="update<?php echo $data['id']; ?>">Update</button></td>
      </form>
      <form action="" method="post">
        <td><button type="submit" name="delete<?php echo $data['id']?>">Delete</button></td>
      </form>
    </tr>
    
  </tbody>

  <?php
    }
  ?>
</table>
</body>
</html>