<?php
session_start();
require_once ('../model/user-model.php');
require_once ('../model/order-model.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cart = $_SESSION['cart'];
    $book_id = $cart[0]['book_id'];

    $total_price = 0;
    foreach($cart as $item) {
        $total_price += $item['price'];
    }

    $password = $_POST["password"];
    $username = $_SESSION['user']['username'];
    $user_id = $_SESSION['user']['user_id'];

    if (check_user_existence($username, $password)) {

        place_order($user_id, $book_id, 1, $total_price);
        $_SESSION['cart'] = array();

        header("Location: ../view/checkout.php?status=17");
        exit();

    } else {
        header("Location: ../view/checkout.php?status=1");
    }
} else {
    header('location: ../view/sign-in.php');
}
?>