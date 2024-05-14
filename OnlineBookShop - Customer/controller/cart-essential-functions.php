<?php
    session_start();
    function is_exist_in_cart($book_id) {
        $cart = $_SESSION['cart'];
        foreach ($cart as $book) {
            if ($book['book_id'] === $book_id) {
                return true;
            }
        }
        return false;
    }


?>