<?php
    require('../model/order-model.php');
    session_start();
    $orders_count = get_order_counts();
    $total_money = get_total_money_by_status();
    $all_orders = get_all_orders();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/dashboardStyles.css">
</head>

<body>
    <?php require_once('navbar.php') ?>

    <div class="container">
        <div>
            <?php require_once('side-panel.php') ?>
        </div>
        <div>
            <h1 align="center">Last Details</h1>
            <table class="last-details-table" id="last-details-table">
                <tr>
                    <th> Order ID </th>
                    <th> Status </th>
                    <th> Date </th>
                    <th> Total </th>
                    <th> Action </th>
                </tr>
                <?php
            foreach($all_orders as $order){
                ?>
                <tr>
                    <td> <?= $order['order_id'] ?> </td>
                    <td> <?= $order['status'] ?> </td>
                    <td> <?= $order['order_date'] ?> </td>
                    <td> <?= $order['total_price'] ?> </td>
                    <td> <a href="order-details.php?order_id=<?= $order['order_id'] ?>"><button>View
                                Details</button></a> </td>
                </tr>
                <?php
            }

        ?>
            </table>
        </div>
        <div class="hero">
            <div class="invoice">
                <p>
                <h2>Invoices</h2>
                </p>
                <p>Total Earning: <?= $total_money['completed_money'] ?> TK.</p>
                <p>Pending: TK. <?= $total_money['pending_money'] ?></p>
                <p>Overdue: TK. 1000</p>
                <p>Essentials: TK. 1000</p>
            </div>
            <div class="cards">
                <p>Total Orders: <?= $orders_count['total_count'] ?></p>
                <p>Orders Pending:
                    <?= $orders_count['pending_count'] ?></p>
                <p>Completed Orders: <?= $orders_count['completed_count'] ?></p>
                <p>Cancelled Orders: <?= $orders_count['cancelled_count'] ?></p>
            </div>
        </div>
    </div>
    <?php require_once('footer.php') ?>
</body>

</html>