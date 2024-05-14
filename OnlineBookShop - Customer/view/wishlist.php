<?php
    session_start();
    require('../model/wishlist-model.php');
    require('../model/book-model.php');
    require('../controller/status-message.php');
    $wishlist = get_wishlist($_SESSION['user']['user_id']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishlist</title>
    <link rel="stylesheet" href="css/cartStyles.css" />
</head>

<body>
    <?php require_once ('navbar.php') ?>
    <h1 align="center">Wishlist</h1>
    <div class="container">

        <?php if(isset($_GET['status']))  echo get_status_message($_GET['status']) ?>
        <table class="wishlist-table" id="wishlist-table"s>
            <?php
            foreach($wishlist as $wish){
                $book = get_book_by_id($wish['book_id']);
                ?>
            <tr>
                <td>
                <a href="book-page.php?book_id=<?= $book['book_id'] ?>">Title: <?= $book['title'] ?></a><br>
                    Author Name: <?= $book['author'] ?><br>
                    <img src="<?= $book['imgdir'] ?>" alt="x"><br>
                    Taka: <?= $book['price'] ?>
                    <form action="../controller/remove-book-from-wishlist-controller.php" method="post">
                        <input type="hidden" name="book_id" value="<?= $book['book_id'] ?>">
                        <button class="delete" type="submit">Remove From Wishlist</button>
                    </form>
                </td>
            </tr>
            <?php
            }

        ?>


        </table>
        <a href="customer-home.php"><button>Back</button></a>

    </div>
    <?php require_once ('footer.php') ?>
</body>

</html>