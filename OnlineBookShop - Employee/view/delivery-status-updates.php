<?php
    require('../model/order-model.php');
    require('../model/book-model.php');
    session_start();
    $books = get_all_books();
    $all_orders = get_all_orders();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Information</title>
    <link rel="stylesheet" href="css/allTableStyles.css">
</head>

<body>
    <?php require_once('navbar.php') ?>
    <?php require_once('side-panel.php') ?>
    <div class="container">
        <table class="order-info-table" id="order-info-table">
            <tr>
                <td colspan="7">
                    <h1 align="center">Delivery Status Updates</h1>
                </td>
            </tr>
            <tr>
                <th> Order ID </th>
                <th> Status </th>
                <th> Date </th>
                <th> Total </th>
                <th colspan="3"> Action </th>
            </tr>
            <?php
            foreach($all_orders as $order){
                ?>
            <tr>
                <td> <?= $order['order_id'] ?> </td>
                <td> <?= $order['status'] ?> </td>
                <td> <?= $order['order_date'] ?> </td>
                <td> <?= $order['total_price'] ?> </td>
                <td> <a href="order-details.php?order_id=<?= $order['order_id'] ?>">View Details</a> </td>
                <td> <a
                        href="../controller/order-status-change-controller.php?order_id=<?= $order['order_id'] ?>&status=Completed">Mark
                        as Completed</a> </td>
                <td> <a
                        href="../controller/order-status-change-controller.php?order_id=<?= $order['order_id'] ?>&status=Cancelled">Mark
                        as Cancelled</a> </td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
    <?php require_once('footer.php') ?>
</body>

</html>