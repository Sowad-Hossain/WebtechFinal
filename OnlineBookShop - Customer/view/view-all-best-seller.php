<?php
require ('../model/book-model.php');

$best_sellers = get_all_books();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Seller</title>
    <link rel="stylesheet" href="css/viewAllStyles.css" />

</head>

<body>

    <?php require_once ('navbar.php') ?>
    <table class="best-seller-table" id="best-seller-table">
        <tr>
            <td>
                <h2>Best Seller</h2>
            </td>
        </tr>
        <?php
            foreach ($best_sellers as $book) {
                ?>
        <tr>
            <td>
            <a href="book-page.php?book_id=<?= $book['book_id'] ?>">Title: <?= $book['title'] ?></a><br>
                Author Name: <?= $book['author'] ?><br>
                <img src="../vendor/<?= $book['imgdir'] ?>" alt="x"><br>
                Taka: <?= $book['price'] ?>
            </td>
        </tr>
        <?php
            }
        ?>
    </table>
    <?php require_once ('footer.php') ?>
</body>

</html>