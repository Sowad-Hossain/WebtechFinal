<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: ../view/sign-in.php");
    exit();
}

require_once '../model/user-model.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["address"]) || empty($_POST["password"])) {
        header("Location: ../view/manage-address-book.php?status=2");
        exit();
    }
    $user_id = $_SESSION['user']['user_id'];
    $password = $_POST["password"];
    $new_address = $_POST["address"];

    // Validate

    if (update_user_address($user_id, $password, $new_address)) {
        header("Location: ../view/manage-address-book.php?status=8");
        exit();
    } else {
        header("Location: ../view/manage-address-book.php?status=1");
        exit();
    }
}
?>