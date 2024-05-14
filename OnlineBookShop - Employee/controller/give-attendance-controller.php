<?php
require_once '../model/user-attendance-model.php';
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: ../view/sign-in.php");
    exit();
}

//validation

$user_id = $_GET['user_id'];
increase_attendance($user_id);
header('location: ../view/rating-system.php');

?>