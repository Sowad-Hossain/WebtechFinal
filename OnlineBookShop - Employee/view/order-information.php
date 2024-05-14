<?php
    require('../model/book-model.php');
    require('../model/order-model.php');
    session_start();
    $counts = get_book_counts();
    $total_money = get_total_money_by_status();
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
        <h1 align="center">Order Information</h1>
        <table class="order-details-table" id="order-details-table">
            <tr>
                <td>
                    <p><strong>Number of books available: </strong> <?=$counts['total_books'] ?></p>
                    <p><strong>Number of books in stock: </strong> <?=$counts['total_stock'] ?></p>
                    <p><strong>Number of books sold: </strong> <?=$counts['total_sold'] ?></p>
                    <p><strong>Total revenue: </strong> <?=$total_money['completed_money']?></p>
                </td>
            </tr>
        </table>
        <table class="order-info-table" id="order-info-table">
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
                <td> <a href="order-details.php?order_id=<?= $order['order_id'] ?>">View Details</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
    <?php require_once('footer.php') ?>
</body>

</html>