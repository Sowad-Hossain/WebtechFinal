<?php
require_once 'db.php';

function add_rating($user_id, $book_id, $rating) {
    $conn = conn();
    $query = "INSERT INTO rating (user_id, book_id, rating) VALUES ($user_id, $book_id, $rating)";
    mysqli_query($conn, $query);
    mysqli_close($conn);
}

function update_rating($user_id, $book_id, $rating) {
    $conn = conn();
    $query = "UPDATE rating SET rating = $rating WHERE user_id = $user_id AND book_id = $book_id";
    mysqli_query($conn, $query);
    mysqli_close($conn);
}

function get_average_rating($book_id) {
    $conn = conn();
    $query = "SELECT AVG(rating) AS average_rating FROM rating WHERE book_id = $book_id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $average_rating = $row['average_rating'];
    mysqli_close($conn);
    return $average_rating;
}
function get_no_of_rating($book_id) {
    $conn = conn();
    $query = "SELECT COUNT(book_id) AS total FROM rating WHERE book_id = $book_id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $total = $row['total'];
    mysqli_close($conn);
    return $total;
}


?>
