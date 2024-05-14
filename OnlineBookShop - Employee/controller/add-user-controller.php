<?php
require_once ('../model/user-model.php');
require_once ('../model/user-attendance-model.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $mobile_number = $_POST["mobile_number"];
    $address = $_POST["Address"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $nid = $_POST["nid"];

    if(empty($full_name) || empty($email) || empty($mobile_number) || empty($address) || empty($username) || empty($password) || empty($nid)) {
        header('location: ../view/profile-update.php?status=2'); 
        exit();
    }

    $role = "Employee";

    create_user($username, $email, $password, $role, 'Active', $full_name, $nid, $address, $mobile_number);
    add_user_attendance($username);

    header('location: ../view/profile-update.php');
    exit();
} else {
    header('location: ../view/sign-in.php');
}
?>