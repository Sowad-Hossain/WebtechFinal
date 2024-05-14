<?php
require_once ('../model/book-model.php');
require_once ("status-message.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["title"]) || empty($_POST["author"]) || empty($_POST["genre"]) || empty($_POST["isbn"]) || empty($_POST["price"]) || empty($_POST["description"]) || empty($_POST["stock_quantity"])) {
        header("Location: ../view/edit-book-info.php?book_id=".$_POST['book_id']."&status=2");
        exit();
    }
    
    $book_id = $_POST['book_id'];
    $title = $_POST["title"];
    $author = $_POST["author"];
    $genre = $_POST["genre"];
    $isbn = $_POST["isbn"];
    $price = $_POST["price"];
    $description = $_POST["description"];
    $stock_quantity = $_POST["stock_quantity"];

    update_book($book_id, $title, $author, $genre, $isbn, $price, $description, $stock_quantity, '');
    header("Location: ../view/edit-book.php?book_id=" . $book_id);
    exit();
} else {
    header("Location: ../view/edit-book.php?book_id=" . $book_id);
}
?>