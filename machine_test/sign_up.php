<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        * {
            box-sizing: border-box
        }

        /* Full-width input fields */
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus,
        input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* Set a style for all buttons */
        button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        button:hover {
            opacity: 1;
        }

        /* Extra styles for the cancel button */
        .cancelbtn {
            padding: 14px 20px;
            background-color: #f44336;
        }

        /* Float cancel and signup buttons and add an equal width */
        .cancelbtn,
        .signupbtn {
            float: left;
            width: 50%;
        }

        /* Add padding to container elements */
        .container {
            padding-left: 500px;
            padding-right: 500px;
        }

        /* Clear floats */
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }

        .error {
            color: red;

        }
    </style>
    <script>
       
    </script>

</head>

<body>
    <form action="login.php" id="form_validation">
        <div class="container">
            <h2>Sign Up</h2>
            <hr>
            <div class="error"></div>

            <input type="text" placeholder="First Name" name="fname" id="fname">


            <input type="text" placeholder="Last Name" name="lname">


            <input type="text" placeholder="Enter Email" name="email" id="email">


            <input type="text" placeholder="Mobile" name="mobile">


            <input type="text" placeholder="Enter Password" name="psw" id="psw">


            <input type="password" placeholder="Repeat Password" name="psw_repeat">
            <div class="clearfix">
                <!-- <button type="button" class="cancelbtn">Cancel</button> -->
                <button type="submit" class="signupbtn" id="btn">Sign Up</button>
            </div>
        </div>
    </form>
    <script>

$(document).ready(function () {
            $("#btn").click(function () {
                var email = $("#email").val();
                var password = $("#psw").val();
                localStorage.setItem("email",email);
                localStorage.setItem("password",password);
               
            })
        });

        //special chara for first name
        $.validator.addMethod("regex",
            function (value, element, regexp) {
                var check = false;
                var re = new RegExp(regexp);
                return this.optional(element) || re.test(value);
            },
            "No special Characters allowed here. ");

        //password first letter capital

        $.validator.addMethod('firstLetter', function validateInput(input) { var re = /^[A-F].*/; return re.test(input); }, 'First letter should be in capital letter');

        //password special chara

        $.validator.addMethod("letters_numbers_special", function (value, element) {
            return this.optional(element) || /^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])[a-zA-Z0-9!@#$%&*]+$/i.test(value);
        }, "spcl");


        $().ready(function () {
            $("#form_validation").validate({
                rules: {
                    fname: {
                        required: true,
                        minlength: 3,
                        regex: /^[A-Za-z\d=#$%...-]+$/
                    },
                    lname: {
                        regex: /^[A-Za-z\d=#$%...-]+$/
                    },

                    mobile: {
                        required: true,
                        number: true,
                        minlength: 10,
                        maxlength: 10
                    },
                    email: {
                        required: true,
                        email: true,

                    },
                    psw: {
                        required: true,
                        firstLetter: true,
                        letters_numbers_special: true,
                        minlength: 10



                    },
                    psw_repeat: {
                        equalTo: "#psw"
                    }
                },
                messages: {
                    fname: {
                        required: "Enter First name",
                        minlength: "Minimum 8 letters"

                    },

                    mobile: {
                        required: "Enter mobile number",
                        minlength: "Please Enter 10 numbers",
                        maxlength: "minimum 10 numbers"
                    },
                    email: {
                        required: "Enter email id",
                        email: "Enter Valid Email Id"
                    },
                    psw: {
                        required: "Enter password",
                        minlength: "Password length must be greater than 8 characters"
                    },
                    psw_repeat: {
                        equalTo: "Password didnt match"
                    }
                }
            });
        });

        
        
    </script>
</body>

</html>