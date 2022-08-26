<?php
include("database_connect.php");
$data = pg_query($database_connection,"select * from facebook");
if (isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $insert_query = "insert into facebook (fname,lname,mobile,email,password) values ('$fname','$lname','$mobile','$email','$password')";
    echo $insert_query;
     pg_query($database_connection,$insert_query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <table align="center"   width="100%" cellspacing="0">
        <tr bgcolor="#3b5998">
            <td width="55%"><img src="facebook.png" alt="" width="220"></td>
            <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text">
                <input type="text" name="" id="">
                <input type="submit" value="LOGIN">
            </td>
        </tr>
        <tr bgcolor="#edfOf5" height="600px">
            <td valign="top" align="center">
                <table width="80%">
                    <tr>
                        <td><h2><font face="verdana">Connect with friends and the world <br> around you on Facebook.</font></h2></td>
                    </tr>
                    <tr>
                        <td><img src="news-fav.png" alt="" width="70"><font face="verdana"> See photos and updates from friends in News Feed.</font></td>
                    </tr>
                    <tr>
                        <td>
                            <img src="news-fav.png" alt="" width="70"> <font face="verdana">Share what's new in your life on your Timeline.</font>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="news-fav.png" alt="" width="70"> <font face="verdana">Find more of what you are looking for with the graph search.</font>
                        </td>
                    </tr>
                </table>
            </td>
            <td valign="top" align="center">
                <table >
                    <tr>
                        <td align="center">
                           <h1>Sign Up</h1> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            
                            <!-- form -->
                           <form action="" method="post">
                            <input type="text" required name="fname" id="" placeholder="First Name" style="height: 30px;" size="30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" required name="lname" id="" placeholder="Last Name" style="height: 30px;" size="30"><br><br>
                            <input type="text" name="mobile" required  placeholder="Enter Mobile Number" style="height: 30px;" size="60" ><br><br>
                            <input type="text" name="email" required  placeholder="Enter Email" style="height: 30px;" size="60"><br><br>
                            <input type="text" name="password" required  placeholder="Enter Password" style="height: 30px;" size="60"><br><br>
                           <button type="submit" name="submit">Submit</button><br><br>
                           </form>
                            <!-- form -->
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
      
    </table>
</body>
</html>