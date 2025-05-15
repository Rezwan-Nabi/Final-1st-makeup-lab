<?php
include '../view/logView.php';

session_start();

$login_error_message = "";

if(isset($_POST['submit'])) {

    if(empty($_POST['email']) || empty($_POST['password'])) {
        $login_error_message = "Email and Password are required!";
     

    } else {
        include '../view/logView.php';
   
            $login_error_message = "Invalid Email or Password!";
        
    }
}

?>