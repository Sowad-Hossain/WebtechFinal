<?php
require_once ('../model/book-model.php');
require_once ('status-message.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["title"]) || empty($_POST["author"]) || empty($_POST["genre"]) || empty($_POST["isbn"]) || empty($_POST["price"]) || empty($_POST["description"]) || empty($_POST["stock_quantity"])) {
        $status_message = get_status_message(2); 
        header("Location: ../view/add-book.php?status=$status_message");
        exit();
    } else {
        $title = $_POST["title"];
        $author = $_POST["author"];
        $genre = $_POST["genre"];
        $isbn = $_POST["isbn"];
        $price = $_POST["price"];
        $description = $_POST["description"];
        $stock_quantity = $_POST["stock_quantity"];

        create_book($title, $author, $genre, $isbn, $price, $description, $stock_quantity, '');
        $status_message = get_status_message(10); 
        header("Location: ../view/create-new-book.php?status=$status_message");
        exit();
    }
} else {
    header("Location: ../view/create-new-book.php");
    exit();
}
?>