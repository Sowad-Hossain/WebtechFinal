<?php
    session_start();
    require '../controller/status-message.php';
    $cart = $_SESSION['cart'];
    $total_price = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="css/cartStyles.css" />
</head>

<body>
]    <?php require_once ('navbar.php') ?>

    <div class="container">
        <h1 align="center">Cart</h1> <br>
        <?php if(isset($_GET['status']))  echo get_status_message($_GET['status']) ?>
        <table class="cart-table" id="cart-table">
            <tr>
                <?php
                foreach($cart as $book) {
                    $total_price += $book['price'];
                    ?>
                <td>
                <a href="book-page.php?book_id=<?= $book['book_id'] ?>">Title: <?= $book['title'] ?></a><br>
                    Author Name: <?= $book['author'] ?><br>
                    <img src="<?= $book['imgdir'] ?>" alt="x"><br>
                    Taka: <?= $book['price'] ?><br><br>
                    <div class="removeFromCart">

                        <a
                            href="../controller/add-remove-book-from-cart.php?book_id=<?= $book['book_id'] ?>&action=2&return_url=cart.php?"><button>Remove
                                from Cart</button></a>
                    </div>
                </td>
                <?php
                }

            ?>
            </tr>
        </table>
]        <br>
        <div class="totalPrice">
            <a href="checkout.php"><button>Checkout [<?=$total_price?>]</button></a>
        </div>
        <a href="customer-home.php"><button>Back</button></a>
    </div>

    <?php require_once ('footer.php') ?>
</body>

</html>