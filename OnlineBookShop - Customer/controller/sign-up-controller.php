<?php
require_once '../model/user-model.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $mobile_number = $_POST["mobile_number"];
    $address = $_POST["Address"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $nid = $_POST["nid"];

    //validation

    if (empty($full_name) || empty($email) || empty($mobile_number) || empty($address) || empty($username) || empty($password) || empty($nid)) {
        header("Location: ../view/sign-up.php?status=2"); 
        exit();
    }

    if (strlen($password) < 8) {
        header("Location: ../view/sign-up.php?status=18"); 
        exit();
    }
    
    create_user($username, $email, $password, 'Customer', 'Active', $full_name, $nid, $address, $mobile_number);
    
    header("Location: ../view/sign-in.php");
    exit();
}
?>