<?php
session_start();
require '../controller/status-message.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Book</title>
    <link rel="stylesheet" href="css/allFormStyles.css">
    <script src="../controller/js/script.js"></script>
</head>

<body>
    <?php require_once('navbar.php') ?>
    <?php require_once('right-panel.php') ?>
    <div class="container">
        <h1 align="center">Create New Book</h1>
        <form action="../controller/create-new-book-controller.php" method="post"
            onsubmit="return validateCreateNewBookForm()">
            <table class="create-book-table" id="create-book-table">
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
                        <button>Create Book</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>