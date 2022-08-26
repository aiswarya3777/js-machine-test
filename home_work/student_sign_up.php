<?php
include("database_connect.php");
if(isset($_POST['btn'])){
    $name = $_POST['full_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $upload_image = "upload_images/";
    $image_name = $upload_image.rand().basename($_FILES['student_file']['name']);


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
        <section class="vh-100" style="background-color: #2779e2;">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-xl-9">
                        <h1 class="text-white mb-4">Enter Student Details</h1>
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body">
                                <div class="row align-items-center pt-4 pb-3">
                                    <div class="col-md-3 ps-5">
                                        <h6 class="mb-0">Full name</h6>
                                    </div>
                                    <div class="col-md-9 pe-5">
                                        <input type="text" class="form-control form-control-lg" name="full_name"/>
                                    </div>
                                </div>
                                <hr class="mx-n3">
                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">
                                        <h6 class="mb-0">Email address</h6>
                                    </div>
                                    <div class="col-md-9 pe-5">
                                        <input type="email" class="form-control form-control-lg"
                                            placeholder="example@example.com" name="email" />
                                    </div>
                                </div>
                                <hr class="mx-n3">
                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">
                                        <h6 class="mb-0">Address</h6>
                                    </div>
                                    <div class="col-md-9 pe-5">
                                        <textarea class="form-control" rows="3" name="address"></textarea>
                                    </div>
                                </div>
                                <hr class="mx-n3">
                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">
                                        <h6 class="mb-0">Upload CV</h6>
                                    </div>
                                    <div class="col-md-9 pe-5">
                                        <input class="form-control form-control-lg" id="formFileLg" type="file" name="student_file"/>
                                        <div class="small text-muted mt-2">Upload your CV/Resume or any other relevant
                                            file. Max file
                                            size 50 MB</div>
                                    </div>
                                </div>
                                <hr class="mx-n3">
                                <div class="px-5 py-4">
                                    <button type="submit" class="btn btn-primary btn-lg" name="btn">Send application</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>