<?php
require_once 'init.php';
if (isset($_POST['signup-submit'])) {
    $user_fname = ucfirst(strtolower($_POST['firstname']));
    $user_lastname =ucfirst(strtolower($_POST['lastname'])) ;
    $user_email = strtolower($_POST['email']) ;
    $user_pwd = $_POST['password'];
    $user_phone= "+254";
    $user_phone .= $_POST['phoneNo'];
   

    

    $user= new USER();

    if ($user->getuserbyEmail($user_email)) {
        $user->redirect("../signup.php?false");
        exit();
    } else {
        $sql=  "INSERT INTO admin (admin_email,admin_fname,admin_lname,admin_phoneno,admin_pwd)";
        $sql .= " VALUES(?,?,?,?,?)";
        if (!$stmt = $user->conn()->prepare($sql)) {
            echo "Server Error!!  Please Report This Error To The Admin Through The Feedback Form In The Home Page";
        } else {
            $hashedpwd = password_hash($user_pwd, PASSWORD_DEFAULT);
            if ($stmt->execute([$user_email,$user_fname,$user_lastname,$user_phone,$hashedpwd])) {

                //send email congaratutaling him for his signup
                // require 'mailer.php';
                
                // $message='
                // <h3 style="color: green">Kirinyaga University Christian Union</h3>
                // Hi '. $user_fname  .' '. $user_lastname.', Congratulation for joining KYUCU Community. Login to your profile using the link below to post your first Article. <br>
                // <a href="https://test.kyucu.co.ke/user/login.php">https://test.kyucu.co.ke/user/login.php</a>
                
                // ';
                // $subject= "Welcome to Christian Union- KYU";
                // sendmail($_POST['email'], $subject, $message);

                $user->redirect("../signup.php?success");
            } else {
                echo "Unknown Error Ocurred During Registration Please Try Later";
                echo "If the error Persists, Please Report this Error to the ADMIN for Assistance";
            }
        }
    }

    // admin registration of new members
} 
else {
    redirect("../admin.php");
}
