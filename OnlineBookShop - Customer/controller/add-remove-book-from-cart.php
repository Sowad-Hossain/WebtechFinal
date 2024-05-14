<?php
session_start();
require('../model/book-model.php');

$book_id = $_GET["book_id"];
$action = $_GET['action'];
$cart = $_SESSION['cart'];
$return_url = $_GET['return_url'];

// Validate

if ($action == 1) { //add
    array_push($cart, get_book_by_id($book_id));
    $_SESSION['cart'] = $cart;
    header("Location: ../view/" . $return_url . "&status=13");
    exit();

} else if($action == 2) {// remove
    foreach ($cart as $key => $book) {
        if ($book['book_id'] === $book_id) {
            unset($cart[$key]);
            break;
        }
    }
    $_SESSION['cart'] = $cart;
    header("Location: ../view/" . $return_url . "&status=14");
    exit();
}

header("Location: ../view/" . $return_url . "&status=-1");


?>