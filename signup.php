<?php //redirects the user to the home page if the session is active
require 'includes/init.php';
if (isset($_SESSION['user_id'])) {
    redirect("../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="images/logoicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup</title>
    <!--RESET SCSS-->
    <link rel="stylesheet" href="css/reset.css">
    <!--BOOTSTRAP CSS-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- main.css -->
    <link rel="stylesheet" href="css/login.css">

    <link rel="stylesheet" href="css/format.css">
    <style>
        .logform {
            margin-top: 10%;
        }
    </style>

</head>

<body>

    <div class="container-fluid">
        <div class="col-md-5 col-sm-6 mx-auto logdiv px-0 mx-0">
            <form id="signupform" class="logform px-2 " action="includes/register.inc.php" method="POST">

                <div class="img-div">

                    <h4 class=" text-center fontt-weight-bold">Register Here</h4>
                    <?php
                    if (isset($_GET['false'])) {
                        echo '<p class =" text-white text-center" style=" background-color: red;border-radius:5px"> Email Already Registered !!</p>';
                    } elseif (isset($_GET['success'])) {
                        echo '<p class =" text-white text-center" style=" background-color: green;border-radius:5px"> Registration Success <a href="login.php" class="text-primary">LOGIN HERE </a></p>';
                    }
                    
                    ?>

                </div>
                <div class="form-row">
                    <div class="col">
                        <div class="form-group ">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control form-control-sm" id="firstName"
                                aria-describedby="emailHelp" placeholder="Enter First Name" name="firstname" required>


                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group ">
                            <label for="lastName" class="font-weight-bolder">Last Name</label>
                            <input type="text" class="form-control form-control-sm" id="lastName"
                                aria-describedby="emailHelp" placeholder="Enter Last Name" name="lastname" required>

                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label for="exampleInputEmail">Email address</label>
                    <input type="email" class="form-control form-control-sm" id="email" aria-describedby="emailHelp"
                        placeholder="Enter email" name="email" required>


                </div>
                <div class="form-group">
                    <label for="phoneNo">Phone No</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">+254</span>
                        </div>
                        <input type="number" id="phoneNo" class="form-control" placeholder=" e.g 701702734"
                            aria-label="phoneNo" aria-describedby="basic-addon1" name="phoneNo" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control form-control-sm" id="password" placeholder="Password"
                        name="password" required="required">

                </div>
                <div class="form-group">
                    <label for="confirmPassword">Password Confirm</label>
                    <input type="password" class="form-control form-control-sm" id="confirmPassword"
                        placeholder="assword" name="Password confirmation" required="required">

                </div>
                <button id="submitReg" type="submit" class="btn btn-warning d-flex mx-auto "
                    name="signup-submit">Register</button>
                <p class="text-center">Already Registered? <a href="login.php" class="text-white">Log-In Here </a></p>

            </form>
        </div>
    </div>


    <!-- <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script> -->
    <script src="js/bootstrap-validate.js"></script>
    <script src="js/admin.js"></script>



</body>

</html>