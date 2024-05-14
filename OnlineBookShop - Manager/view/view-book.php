<?php
    require('../model/book-model.php');
    session_start();
    $book = get_book_by_id($_GET['book_id']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Book</title>
    <link rel="stylesheet" href="css/allTableStyles.css">
</head>

<body>
    <?php require_once('navbar.php') ?>
    <?php require_once('right-panel.php') ?>


    <div class="container">
        <h1 align="center">View Book</h1>
        <table class="book-table" id="book-table">
            <tr>
                <td>
                    <p><strong>Book Title:</strong> <?=$book['title']?></p>
                    <p><strong>Author:</strong> <?=$book['author']?></p>
                    <p><strong>Genre:</strong> <?=$book['genre']?></p>
                    <p><strong>ISBN:</strong> <?=$book['isbn']?></p>
                    <p><strong>Price:</strong> <?=$book['price']?></p>
                    <p><strong>Description:</strong> <?=$book['description']?></p>
                    <p><strong>Stock Quantity:</strong> <?=$book['stock_quantity']?></p>

                </td>
            </tr>
        </table>
    </div>
</body>

</html>