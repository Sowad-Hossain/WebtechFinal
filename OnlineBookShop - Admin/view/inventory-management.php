<?php
    require('../model/book-model.php');
    session_start();
    $books = get_all_books();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management</title>
    <link rel="stylesheet" href="css/manageUsersStyles.css" />
</head>

<body>
    <?php require_once('navbar.php') ?>
    <?php require_once('side-panel.php') ?>
    <div class="container">
        <table class="inventory-table" id="inventory-table">
            <tr>
                <td colspan="5">
                    <h1>Inventory Details</h1>
                </td>
                <td>
                <a href="dashboard.php">Back</a>
                    <a href="add-book.php">Add Book</a>
                </td>
            </tr>
            <tr>
                <th> Book ID </th>
                <th> Book Title </th>
                <th> Stock </th>
                <th colspan="3"> Action </th>
            </tr>
            <?php
                foreach($books as $book) {
                    ?>
            <tr>
                <td><?=$book['book_id']?></td>
                <td><?=$book['title']?></td>
                <td><?=$book['stock_quantity']?></td>
                <td><a href="book-details.php?book_id=<?=$book['book_id']?>">View</a></td>
                <td><a href="edit-book-info.php?book_id=<?=$book['book_id']?>">Edit</a></td>
                <td><a href="../controller/remove-book-controller.php?book_id=<?=$book['book_id']?>">Remove</a></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </div>
    <?php require_once('footer.php') ?>
</body>

</html>