<?php
session_start();
require('../model/wishlist-model.php');

$user_id = $_SESSION['user']['user_id'];
$book_id = $_GET['book_id'];
add_to_wishlist($user_id, $book_id);
header('location: ../view/book-page.php?book_id='.$book_id);

?>