<?php


// //GOOGLW RECAPTCHA SECURITY
// define('SITE_KEY', '6LerYbQUAAAAADOzC2W_JWN2-1TPXfZMwznqV_e9');
// define('SECRET_KEY', '6LerYbQUAAAAANIAUCjJkHfv1DC1Pd3YA0K1TGni');
require 'init.php';
if (isset($_POST['feed'])) {

    $name = $_POST['name'];
    $phoneNo = $_POST['phone'];
    $email = $_POST['email'];
    $issues = $_POST['issues'];
    $user= new USER();
    $sql = "INSERT INTO feedback (feed_name, feed_email, feed_phone, feed_message) VALUES (?,?,?,?);";
    if (!$stmt = $user->conn()->prepare($sql)) {
        echo "Server Error!!  Please Report This Error To The Admin Through The Feedback Form In The Home Page";
    } else {
       
        if ($stmt->execute([$name,$phoneNo,$email,$issues])) {
            redirect("../index.php");
        }
    }

} else {
   
    redirect("../index.php");
}
