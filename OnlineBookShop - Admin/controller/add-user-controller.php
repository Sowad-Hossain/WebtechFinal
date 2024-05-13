<?php
require_once ('../model/user-model.php');
require_once ('status-message.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["full_name"]) || empty($_POST["email"]) || empty($_POST["mobile_number"]) || empty($_POST["Address"]) || empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["nid"]) || empty($_POST["role"])) {
        $status_message = get_status_message(2); 
        header("Location: ../view/add-user.php?status=$status_message");
        exit();
    } elseif (strlen($_POST["password"]) < 8) {
        $status_message = get_status_message(19); 
        header("Location: ../view/add-user.php?status=$status_message");
        exit();
    } else {
        $full_name = $_POST["full_name"];
        $email = $_POST["email"];
        $mobile_number = $_POST["mobile_number"];
        $Address = $_POST["Address"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $nid = $_POST["nid"];
        $role = $_POST["role"];

        create_user($username, $email, $password, $role, 'Active', $full_name, $nid, $Address, $mobile_number);
        $status_message = get_status_message(20); 
        header("Location: ../view/add-user.php?status=$status_message");
        exit();
    }
} else {
    header("Location: ../view/add-user.php");
    exit();
}
?>