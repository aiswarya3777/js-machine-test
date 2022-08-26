<?php
include("database_connect.php");
$message = "";//if we get undefined index error we can give this above if
if(isset($_POST['submit'])){
    $name = $_POST['student'];
    $class = $_POST['student_class'];
    // $name = $_POST[''];
    $upload_image = "upload_images/";//setting image path so created a folder then put the name of the folder into a variable
    $image_name = $upload_image.rand().basename($_FILES['photo']['name']);//here we take the image name
    //move_uploaded_file = to move the image to the folder
    move_uploaded_file($_FILES['photo']['tmp_name'],$image_name);//to store image into the folder that we created
    $insert_image = pg_query($database_connection,"insert into student (name,class,photo) values ('$name','$class','$image_name')");
    if($insert_image){
        $message = "File Uploaded";
    }else{
        $message = "Failed";
    }
    header("location:file_upload_data.php");
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
    <style>
        p{
            color:green;
        }
    </style>
</head>
<body>
    <!-- enctype="multipart/form-data" to encript data  -->
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <h3>Student Details</h3>
            <p><b><?php echo $message; ?></b></p>
            <label for="">Student Name</label>
            <input type="text" name="student" id=""><br><br>
            <label for="">Class</label>
            <input type="text" name="student_class" id=""><br><br>
            <label for="">Upload Image</label>
            <input type="file" name="photo" id=""><br><br>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>