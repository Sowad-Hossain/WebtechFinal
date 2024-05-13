<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
    <link rel="stylesheet" href="css/addBookAndUserStyles.css">
    <script src="../controller/js/script.js"></script>
</head>

<body>
    <?php require_once('navbar.php') ?>
    <?php require_once('side-panel.php') ?>
    <div class="container">
        <h1 align="center">Add Book</h1>
        <form action="../controller/add-book-controller.php" method="post" onsubmit="return validateAddBookForm()">
            <table class="add-book-table" id="add-book-table">
                <tr>
                    <td>
                        Book Title <br>
                        <input type="text" name="title"><br><br>
                        Author <br>
                        <input type="text" name="author"><br><br>
                        Genre <br>
                        <input type="text" name="genre"><br><br>
                        ISBN <br>
                        <input type="text" name="isbn"><br><br>
                        Price <br>
                        <input type="text" name="price"><br><br>
                        Description <br>
                        <textarea type="text" name="description"> </textarea><br><br>
                        Stock Quantity <br>
                        <input type="text" name="stock_quantity"><br><br>
                        <!-- fahim: add book button -->
                        <button>Add Book</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <?php require_once('footer.php') ?>
</body>

</html>