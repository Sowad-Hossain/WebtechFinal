<?php
session_start();

$user_id = $_SESSION['user']['user_id'];

require_once '../model/user-model.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $old_password = $_POST["password"];
    $new_password = $_POST["npassword"];
    $confirm_new_password = $_POST["cnpassword"];

    if (empty($_POST["password"]) || empty($_POST["npassword"]) || empty($_POST["cnpassword"])) {
        header("Location: ../view/change-password.php?status=2");
        exit();
    }

    if ($new_password === $confirm_new_password) {
        if (update_password($user_id, $old_password, $new_password)) {
            header("Location: ../view/change-password.php?status=6");
            exit();
        } else {
            header("Location: ../view/change-password.php?status=5");
            exit();
        }
    } else {
        header("Location: ../view/change-password.php?status=4");
        exit();
    }
}
?>