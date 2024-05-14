<?php
require_once ('../model/book-model.php');

$book_id = $_GET['book_id'];
delete_book($book_id);
header("Location: ../view/books.php");
?>