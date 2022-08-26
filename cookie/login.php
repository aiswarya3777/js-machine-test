<?php
if(isset($_POST['check'])){
    setcookie("user",$_POST['user_name'],time()+3600);//time to 
    setcookie("password",$_POST['password'],time()+3600);
}else{
    setcookie("user","");
    setcookie("password","");
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
        username <input type="text" name="user_name" id="" value="<?php if(isset($_COOKIE['user'])){//by doing this we can fretrive it from cookie
            echo $_COOKIE['user'];
        };  ?>"><br>
        password <input type="text" name="password" id="" value="<?php if(isset($_COOKIE['password'])){ echo $_COOKIE['password'];} ?>"><br>
        save password <input type="checkbox" name="check" id="">
        <button type="submit" name="btn">Login</button>
    </form>
</body>
</html>