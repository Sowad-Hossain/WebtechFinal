<?php
require_once 'db.php';

function create_book($title, $author, $genre, $isbn, $price, $description, $stock_quantity, $imgdir) {
    $conn = conn();
    $query = "INSERT INTO books (title, author, genre, isbn, price, description, stock_quantity, imgdir) 
              VALUES ('$title', '$author', '$genre', '$isbn', $price, '$description', $stock_quantity, '$imgdir')";
    mysqli_query($conn, $query);
    mysqli_close($conn);
}

function get_book_by_id($book_id) {
    $conn = conn();
    $query = "SELECT * FROM books WHERE book_id = $book_id";
    $result = mysqli_query($conn, $query);
    $book = mysqli_fetch_assoc($result);
    mysqli_close($conn);
    return $book;
}

function get_books_by_genre($genre) {
    $conn = conn();
    $query = "SELECT * FROM books WHERE genre like '%$genre%'";
    $result = mysqli_query($conn, $query);
    $books = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($conn);
    return $books;
}

function update_book($book_id, $title, $author, $genre, $isbn, $price, $description, $stock_quantity, $imgdir) {
    $conn = conn();
    $query = "UPDATE books SET 
              title = '$title', 
              author = '$author', 
              genre = '$genre', 
              isbn = '$isbn', 
              price = $price, 
              description = '$description', 
              stock_quantity = $stock_quantity, 
              imgdir = '$imgdir' 
              WHERE book_id = $book_id";
    mysqli_query($conn, $query);
    mysqli_close($conn);
}

function delete_book($book_id) {
    $conn = conn();
    $query = "DELETE FROM books WHERE book_id = $book_id";
    mysqli_query($conn, $query);
    mysqli_close($conn);
}

function get_all_books() {
    $conn = conn();
    $query = "SELECT * FROM books";
    $result = mysqli_query($conn, $query);
    $books = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($conn);
    return $books;
}

function get_book_counts() {
    $conn = conn();
    
    $query_total_books = "SELECT COUNT(*) AS total_books FROM books";
    $result_total_books = mysqli_query($conn, $query_total_books);
    $total_books_row = mysqli_fetch_assoc($result_total_books);
    $total_books = $total_books_row['total_books'];

    $query_in_stock = "SELECT SUM(stock_quantity) AS total_stock FROM books";
    $result_in_stock = mysqli_query($conn, $query_in_stock);
    $in_stock_row = mysqli_fetch_assoc($result_in_stock);
    $total_stock = $in_stock_row['total_stock'];

    $query_sold = "SELECT SUM(quantity) AS total_sold FROM orders";
    $result_sold = mysqli_query($conn, $query_sold);
    $sold_row = mysqli_fetch_assoc($result_sold);
    $total_sold = $sold_row['total_sold'];

    mysqli_close($conn);

    return [
        'total_books' => $total_books,
        'total_stock' => $total_stock,
        'total_sold' => $total_sold
    ];
}

?>

