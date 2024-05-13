<?php
require_once '../model/user-model.php';
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: ../view/sign-in.php");
    exit();
}

//validation

$user_id = $_GET['user_id'];
$role = $_GET['role'];
change_user_role($user_id, $role);
header('location: ../view/manage-'.strtolower($role).'s.php');

?>
