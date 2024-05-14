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
    <title>Edit Book</title>
    <link rel="stylesheet" href="css/allFormStyles.css">
    <script src="../controller/js/script.js"></script>
</head>

<body>
    <?php require_once('navbar.php') ?>
    <?php require_once('right-panel.php') ?>
    <div class="container">
        <h1 align="center">Edit Book</h1>

        <form action="../controller/update-book-controller.php" method="post" onsubmit=" return validateEditBookForm()">
            <input type="hidden" name="book_id" value="<?=$book['book_id']?>">
            <table class="edit-book-table" id="edit-book-table">
                <tr>
                    <td>
                        Book Title <br>
                        <input type="text" name="title" value="<?=$book['title']?>"><br><br>
                        Author <br>
                        <input type="text" name="author" value="<?=$book['author']?>"><br><br>
                        Genre <br>
                        <input type="text" name="genre" value="<?=$book['genre']?>"><br><br>
                        ISBN <br>
                        <input type="text" name="isbn" value="<?=$book['isbn']?>"><br><br>
                        Price <br>
                        <input type="text" name="price" value="<?=$book['price']?>"><br><br>
                        Description <br>
                        <textarea type="text" name="description"><?=$book['description']?></textarea><br><br>
                        Stock Quantity <br>
                        <input type="text" name="stock_quantity" value="<?=$book['stock_quantity']?>"><br><br>
                        <button type="submit">Edit Book</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>