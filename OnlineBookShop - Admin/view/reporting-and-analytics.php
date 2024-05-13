<?php
    require('../model/order-model.php');
    require('../model/book-model.php');
    require('../model/user-model.php');
    session_start();
    
    $all_orders = get_all_orders();
    $counts = get_book_counts();
    $users = get_user_counts();
    $total_money = get_total_money_by_status();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporting and Analytics</title>
    <link rel="stylesheet" href="css/bookDetailsStyles.css">

</head>

<body>
    <?php require_once('navbar.php') ?>
    <?php require_once('side-panel.php') ?>

    <div class="container">
        <h1 align="center">Report and Analytics</h1>
        <table class="reporting-and-analytics-table" id="reporting-and-analytics-table">
            <tr>
                <td>
                    <p><strong>Number of Books Available: </strong><?=$counts['total_books'] ?></p>
                    <p><strong>Number of Books In Stocks: </strong> <?=$counts['total_stock'] ?></p>
                    <p><strong>Number of Books Sold: </strong> <?=$counts['total_sold'] ?></p>
                    <p><strong>Total Revenue: </strong> <?=$total_money['completed_money']?></p>
                    <p><strong>Number of Customers: </strong> <?=$users['total_customers'] ?></p>
                    <p><strong>Number of Employees: </strong> <?=$users['total_employees'] ?></p>
                    <p><strong>Number of Managers: </strong> <?=$users['total_managers'] ?></p>
                </td>
            </tr>
        </table>
       
        <table class="order-info-table" id="order-info-table">
            <tr>
                <td colspan="5">
                    Order Info
                </td>
            </tr>
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
                <td> <a href="order-details.php?order_id=<?= $order['order_id'] ?>">View Details</a> </td>
            </tr>
            <?php
            }
        ?>
        </table>

    </div>
    <?php require_once('footer.php') ?>
</body>

</html>