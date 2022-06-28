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
    <form action="/login" name="form1" onsubmit="return sign_up()">
        <div class="container">
            <div class="row">
                <div class="col-12 center">
                    <h1>Sign Up Form</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-4">First Name*</div>
                <div class="col-4"><input type="text" name="" id="first_name" required>
                    <label for="" id="fname"></label>
                </div>
                <div class="col-2"></div>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-4">Last Name</div>
                <div class="col-4"><input type="text" name="" id="last_name" required>
                    <label for="" id="lname"></label>
                </div>
                <div class="col-2"></div>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-4">Email*</div>
                <div class="col-6"><input type="text" name="" id="email" required>
                    <label for="" id="labelemail"></label>
                </div>
                <div class="col-2"></div>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-4">Mobile*</div>
                <div class="col-4"><input type="text" name="" id="mobile" required>
                    <label for="" id="mob"></label>
                </div>
                <div class="col-2"></div>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-4">Password*</div>
                <div class="col-4"><input type="text" name="" id="password" required>
                    <label for="" id="password_label"></label>
                </div>
                <div class="col-2"></div>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-4">Confirm Password*</div>
                <div class="col-4"><input type="text" name="" id="confirm" required>
                    <label for="" id="confirm_label"></label>
                </div>
                <div class="col-2"></div>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8 center"><button class="btn btn-primary">Sign Up</button></div>
                <div class="col-2"></div>
            </div>
        </div>
    </form>

    <script>
        function sign_up() {
            return_var = true;
            var fname = document.forms["form1"]["first_name"].value;
            var lname = document.forms["form1"]["last_name"].value;
            var password = document.forms["form1"]["password"].value;
            var email = document.forms["form1"]["email"].value;
            var mobile = document.forms["form1"]["mobile"].value;
            var confirm = document.forms["form1"]["confirm"].value;
            localStorage.setItem("email", email);
            localStorage.setItem("password",password);
            // console.log(localStorage.getItem("password"))

            //first letter capital
            var char = password.charAt(0).toUpperCase() + password.slice(1);
            if (password != char) {
                document.getElementById("password_label").innerHTML = "First letter should be capital";
                return_var = false;
            }

            var lname_split = lname.split("");
            var lname_length = lname_split.length;
            var fname_split = fname.split("");
            var fname_length = fname_split.length;
            var f_length = fname.length;
            var mobile_split = mobile.split("");
            var mobile_length = mobile_split.length;
            if (mobile_length > 10) {
                document.getElementById("mob").innerHTML = "Only 10 digits are alloweded";
                return_var = false;
            }

            if (f_length < 3) {
                document.getElementById("fname").innerHTML = "Password must contain minimum 3 letters";
                return_var = false;
            }
            var spcl = "[*.!@#$%^&(){}[]:;<>,.?/~_+-=|\]"//[$&+,:;=?@#|'<>.-^*()%!_]
            var spcl_split = spcl.split("");
            var spcl_length = spcl_split.length;
            for (i = 0; i < fname_length; i++) {
                for (j = 0; j < spcl_length; j++) {
                    if (fname_split[i] == spcl_split[j]) {
                        document.getElementById("fname").innerHTML = "Special characters are not alloweded";
                        return_var = false;
                    }
                }
            }

            for (k = 0; k < lname_length; k++) {
                for (a = 0; a < spcl_length; a++) {
                    if (lname_split[k] == spcl_split[a]) {
                        document.getElementById("lname").innerHTML = "Special characters are not alloweded";
                        return_var = false;
                    }
                }
            }

            validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

            if (!email.match(validRegex)) {
                document.getElementById('labelemail').innerHTML = "Enter valid email"
                return_var = false;
            }

            var password_split = password.split("");
            var password_length = password_split.length;
            
            if (password_length < 8) {
                document.getElementById("password_label").innerHTML = "Password length must be grater than 8 characters";
                return_var = false;
            }
            var spcl = "[*.!@#$%^&(){}[]:;<>,.?/~_+-=|\]"//[$&+,:;=?@#|'<>.-^*()%!_]
            var spcl_split = spcl.split("");
            // console.log(spcl_split)

            if (password != confirm) {
                
                document.getElementById("confirm_label").innerHTML = "Password must match with confirm password";
                return_var = false;
            }

            // flag = 0;
            // for (x = 0; x < spcl_length; x++) {
            //     for (y = 0; y < password_length; y++) {
            //        if(password_split[y] == spcl_split[x] ){
            //         flag++;
            //         return_var = false; 
            //     }

            //     }
            // }
            // if(flag == 1){
            //     // document.getElementById("password_label").innerHTML = "Password must contain special cara";
            //     window.location.href = "{{Route('login')}}";
            //     return_var = false;

            // }else{
            //    document.getElementById("password_label").innerHTML = "Password should contain special characters";
            //    return_var = false;

            // }
            // document.forms['form1'].submit();
            return return_var;

        }



    </script>
</body>

</html>