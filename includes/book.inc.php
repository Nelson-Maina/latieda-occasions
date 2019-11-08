<?php


// //GOOGLW RECAPTCHA SECURITY
// define('SITE_KEY', '6LerYbQUAAAAADOzC2W_JWN2-1TPXfZMwznqV_e9');
// define('SECRET_KEY', '6LerYbQUAAAAANIAUCjJkHfv1DC1Pd3YA0K1TGni');
require 'init.php';
if (isset($_POST['book'])) {
    
    $location = $_POST['location'];
    $name = $_POST['name'];
    $phoneNo = $_POST['phone'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $decription = $_POST['description'];
    $user= new USER();
    $sql = "INSERT INTO event_book (event_book_location, event_book_date, event_book_desc, name, phone_no, email) VALUES (?,?,?,?,?,?);";
    if (!$stmt = $user->conn()->prepare($sql)) {
        echo "Server Error!!  Please Report This Error To The Admin Through The Feedback Form In The Home Page";
    } else {
       
        if ($stmt->execute([$location,$date,$decription,$name,$phoneNo,$email])) {
            redirect("../index.php");
        }
    }

} else {
   
    redirect("../index.php");
}
