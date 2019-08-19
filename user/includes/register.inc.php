<?php
require_once 'init.php';
if (isset($_POST['signup-submit'])) {
    $user_fname = $_POST['firstname'];
    $user_lastname = $_POST['lastname'];
    $user_email = $_POST['email'];
    $user_regno = $_POST['regno'];
    $user_pwd = $_POST['password'];

    $user= new USER();

    if ($user->getuserbyEmail($user_email)) {
        $user->redirect("../signup.php?false");
        exit();
    } else {
        $sql=  "INSERT INTO user (user_email,user_fname,user_lname,user_regno,user_pwd)";
        $sql .= " VALUES(?,?,?,?,?)";
        if (!$stmt = $user->conn()->prepare($sql)) {
            echo "Server Error!!  Please Report This Error To The Admin Through The Feedback Form In The Home Page";
        } else {
            $hashedpwd = password_hash($user_pwd, PASSWORD_DEFAULT);
            if ($stmt->execute([$user_email,$user_fname,$user_lastname,$user_regno,$hashedpwd])) {

                //send email congaratutaling him for his signup
                require 'mailer.php';
                
                $message="Hi ". $user_fname  ." ". $user_lastname.", Congratulation for joining KYUCU Community. Login to your profile using the link below to post your first Article
                https://test.kyucu.co.ke/user/login.php
                ";
                $subject= "Welcome to Christian Union- KYU";
                $from= "info@kyucu.co.ke";
                sendmail($_POST['email'], $message, $from, $subject);

                $user->redirect("../signup.php?success");
            } else {
                echo "Unknown Error Ocurred During Registration Please Try Later";
                echo "If the error Persists, Please Report this Error to the ADMIN for Assistance";
            }
        }
    }
} else {
    redirect("../signup.php");
}