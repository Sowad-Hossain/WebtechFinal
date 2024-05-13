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
    <title>Book Details</title>
    <link rel="stylesheet" href="css/bookDetailsStyles.css" />
</head>

<body>
    <?php require_once('navbar.php') ?>
    <?php require_once('side-panel.php') ?>
    <div class="container">
        <div class="book-details">
            <h1 align="center"><?= $book['title'] ?></h1>
            <p><strong>Author:</strong> <?= $book['author'] ?></p>
            <p><strong>Genre:</strong> <?= $book['genre'] ?></p>
            <p><strong>ISBN:</strong> <?= $book['isbn'] ?></p>
            <p><strong>Price:</strong> <?= $book['price'] ?></p>
            <p><strong>Description:</strong> <?= $book['description'] ?></p>
            <p><strong>Stock Quantity:</strong> <?= $book['stock_quantity'] ?></p>
        </div>
    </div>
    <?php require_once('footer.php') ?>
</body>

</html>