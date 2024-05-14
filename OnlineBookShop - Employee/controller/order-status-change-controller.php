<?php
require_once '../model/order-model.php';
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: ../view/sign-in.php");
    exit();
}

//validation

$order_id = $_GET['order_id'];
$status = $_GET['status'];
update_order_status($order_id, $status);

header('location: ../view/delivery-status-updates.php');

?>
