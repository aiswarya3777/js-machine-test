<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>
    <style>
        .whole_div {
            margin-top: 70px;
        }

        .center {
            text-align: center;
        }

        div {
            margin-top: 10px;
            align-items: center;
        }
    </style>
</head>

<body>
    <form action="/home_page" onsubmit="return login()">
        <div class="container whole_div">
            <div class="row">
                <div class="col-12 center">Login Form</div>
            </div>

            <div class="row">
                <div class="col-2"></div>
                <div class="col-4">Email*</div>
                <div class="col-4"><input type="text" name="" id="log_email" required>
                    <label for="" id="label_email_log"></label>
                </div>
                <div class="col-2"></div>
            </div>

            <div class="row">
                <div class="col-2"></div>
                <div class="col-4">Password*</div>
                <div class="col-4"><input type="text" name="" id="log_pass" required>
                    <label for="" id="credential"></label>
                </div>
                <div class="col-2"></div>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8 center"><button type="submit" class="btn btn-primary">Login</button></div>
                <div class="col-2"></div>
            </div>
        </div>
    </form>
    <script>
        function login() {
            return_var = true;
            var email = document.getElementById("log_email").value;
            var password = document.getElementById("log_pass").value;
            var sign_password = localStorage.getItem("password");
            var sign_user_id = localStorage.getItem("email");
            console.log(sign_password , sign_user_id)
            validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
            if (!email.match(validRegex)) {
                document.getElementById('label_email_log').innerHTML = "Enter valid email";
                return_var = false;
            }

            // var credentials = ["aiswarya3777@gmail.com","Aiswarya@3777"];
            if(email == sign_user_id && password == sign_password){
                window.location.href = "{{Route('home')}}";
            }else{
                document.getElementById("credential").innerHTML = "Incorrect Username Or Password";
                return_var = false;
            }
            return return_var;
        }
    </script>
</body>

</html>