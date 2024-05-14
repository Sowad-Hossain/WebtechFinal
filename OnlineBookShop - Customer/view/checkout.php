<?php
    session_start();
    require('../model/user-model.php');
    require '../controller/status-message.php';
    $user = get_user_by_username($_SESSION['user']['username']);
    $cart = $_SESSION['cart'];

    $total_price = 0;
    foreach($cart as $item) {
        $total_price += $item['price'];
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="css/checkoutStyles.css" />
</head>

<body>
    <?php require_once ('navbar.php') ?>
    <h1 align="center">Checkout</h1>
    <div class="container">
        <?php if(isset($_GET['status']))  echo get_status_message($_GET['status']) ?>

        <table class="checkout-table" id="checkout-table">
            <tr>
                <td>
                    Username: <?=$user['username']?> <br>
                    Contact Number: <?=$user['mobile_number']?> <br>
                    E-mail: <?=$user['email']?> <br>
                    Address: <?=$user['address']?> <br><br>
                    Total: <?=$total_price?> <br><br>
                    <form action="../controller/checkout-controller.php" method="post">
                        Password <br>
                        <input type="text" name="password"><br><br>
                        <button>Confirm Order</button>
                    </form>
                </td>
            </tr>
        </table>
        <a href="cart.php"><button>Back</button></a>
    </div>

    <?php require_once ('footer.php') ?>
</body>

</html>