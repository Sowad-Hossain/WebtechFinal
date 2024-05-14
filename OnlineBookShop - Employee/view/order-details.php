<?php
    require('../model/order-model.php');
    require('../model/user-model.php');
    session_start();
    
    if(!isset($_GET['order_id'])) $_GET['order_id'] = 1;
    $order = get_order_details($_GET['order_id']);
    $user_details = get_user_by_id($order['user_id']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <?php require_once('navbar.php') ?>
    <?php require_once('side-panel.php') ?>
    <div class="container">
        <h1 align="center">Order Details</h1>
        <table class="order-details-table" id="order-details-table">
            <tr>
                <td>
                    <p><strong>Username: </strong> <?= $user_details['username'] ?></p>
                    <p><strong>Order ID:</strong> <?= $order['order_id'] ?></p>
                    <p><strong>Order Date:</strong> <?= $order['order_date'] ?></p>
                    <p><strong>Total Amount:</strong> <?= $order['total_price'] ?></p>
                    <p><strong>Order Status:</strong> <?= $order['status'] ?></p>
                </td>
            </tr>
        </table>
    </div>
    <?php require_once('footer.php') ?>
</body>

</html>