<?php
session_start();
require('../model/wishlist-model.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $user_id = $_SESSION['user']['user_id'];
    $book_id = $_POST["book_id"];

    // Validate

    if (remove_from_wishlist($user_id, $book_id)) {
        header("Location: ../view/wishlist.php?status=9");
        exit();
    } else {
        header("Location: ../view/wishlist.php?status=11");
        exit();
    }
}


?>