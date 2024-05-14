<?php
    require_once('../model/user-model.php');
    require_once '../controller/status-message.php';
    session_start();    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback and Reviews</title>
    <link rel="stylesheet" href="css/allTableStyles.css">
</head>

<body>
    <?php require_once('navbar.php') ?>
    <?php require_once('side-panel.php') ?>
    <div class="container">
        <table class="customer-ratings-table" id="customer-ratings-table">
            <tr>
                <td colspan="7">
                    <h1 align="center">Customer Ratings</h1>
                </td>
            </tr>
            <tr>
                <th> Book ID </th>
                <th> Book Title </th>
                <th> Username </th>
                <th> Rating </th>
                <th colspan="3"> Action </th>
            </tr>
            <?php
            foreach($all_orders as $order){
                ?>
            <tr>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> <a href="">View Customer Details</a> </td>
                <td> <a href="">Delete Rating</a> </td>
                <td> <a href="">Ban Customer</a> </td>
            </tr>
            <?php
            }
        ?>
        </table>
        <table class="customer-reviews-table" id="customer-reviews-table">
            <tr>
                <td colspan="7">
                    <h1 align="center">Customer Reviews</h1>
                </td>
            </tr>
            <tr>
                <th> Book ID </th>
                <th> Book Title </th>
                <th> Username </th>
                <th> Review </th>
                <th colspan="3"> Action </th>
            </tr>
            <?php
            foreach($all_orders as $order){
                ?>
            <tr>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> <a href="">View Customer Details</a> </td>
                <td> <a href="">Delete Review</a> </td>
                <td> <a href="">Ban Customer</a> </td>
            </tr>
            <?php
            }
        ?>
        </table>
    </div>
    <?php require_once('footer.php') ?>
</body>

</html>