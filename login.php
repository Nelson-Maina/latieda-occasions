<?php

//GOOGLW RECAPTCHA SECURITY
define('SITE_KEY', '');
define('SECRET_KEY', '');
// require 'includes/init.php';
// $sess = new SESSION();
//redirects the user to the home page if the session is active
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
    <title>Login</title>
    <!--RESET SCSS-->
    <link rel="stylesheet" href="css/reset.css">
    <!--BOOTSTRAP CSS-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- main.css -->
    <link rel="stylesheet" href="css/admin.css">
    <!-- //Google recaptcha form -->
    <script
        src="https://www.google.com/recaptcha/api.js?render=<?php echo SITE_KEY; ?>">
    </script>
</head>

<body>

    <div class="container-fluid">
        <div class="col-md-4 mx-auto logdiv">
            <form class="logform p-2 " action="includes/login.inc.php" method="POST">
                <div>
                
                    <h4 class=" text-center">Login Here</h4>
                    <?php
                    if (isset($_GET['false'])) {
                        echo '<p class =" text-white text-center" style=" background-color: red;border-radius:5px"> No User With That Email</p>';
                    } elseif (isset($_GET['wrong'])) {
                        echo '<p class =" text-white text-center" style=" background-color: red;border-radius:5px"> Wrong Password</p>';
                    } elseif (isset($_GET['resetsuccess'])) {
                        echo '<p class =" text-white text-center" style=" background-color: green;border-radius:5px"> Password Reset Was Successful</p>';
                    } elseif (isset($_GET['login'])) {
                        echo '<p class =" text-white text-center" style=" background-color: green;border-radius:5px">To Comment on the Post</p>';
                    }
                    
                    ?>

                </div>
                <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" id="">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                        placeholder="Enter email" name="email" required>

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password"
                        required>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
                    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                </div>
                <button type="login" class="btn btn-success d-flex mx-auto" name="login-submit">Login</button>
                <p class="text-center">New User? <a href="signup.php" class="text-white">Register Here </a></p>
                <p class="text-center"> <a href="reset.php" class="text-white">Forgot Password? </a></p>
            </form>
        </div>
    </div>
    <!-- //Google Recaptcha Security -->
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('<?php echo SITE_KEY; ?>', {
                action: 'login'
            }).then(function(token) {
                // console.log(token);
                document.getElementById('g-recaptcha-response').value = token;
            });
        });
    </script>

</body>

</html>