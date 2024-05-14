<?php
require_once 'db.php'; 

function add_to_wishlist($user_id, $book_id) {
    $conn = conn();
    $query = "INSERT INTO wishlist (user_id, book_id) VALUES ($user_id, $book_id)";
    mysqli_query($conn, $query);
    mysqli_close($conn);
}

function remove_from_wishlist($user_id, $book_id) {
    $conn = conn();
    $query = "DELETE FROM wishlist WHERE user_id = $user_id AND book_id = $book_id";
    mysqli_query($conn, $query);
    mysqli_close($conn);
    return true;
}

function get_wishlist($user_id) {
    $conn = conn();
    $query = "SELECT * FROM wishlist WHERE user_id = $user_id";
    $result = mysqli_query($conn, $query);
    $wishlist = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($conn);
    return $wishlist;
}

function is_book_in_wishlist($user_id, $book_id) {
    $conn = conn();
    $query = "SELECT COUNT(*) AS count FROM wishlist WHERE user_id = $user_id AND book_id = $book_id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $count = $row['count'];
    mysqli_close($conn);
    return $count > 0; // Returns true if the book is in the wishlist, false otherwise
}

?>
