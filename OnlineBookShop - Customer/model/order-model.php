<?php
require_once 'db.php';

function place_order($user_id, $book_id, $quantity, $total_price) {
    $conn = conn();
    $query = "INSERT INTO orders (user_id, book_id, quantity, total_price) VALUES ($user_id, $book_id, $quantity, $total_price)";
    mysqli_query($conn, $query);
    mysqli_close($conn);
}

function get_user_orders($user_id) {
    $conn = conn();
    $query = "SELECT * FROM orders WHERE user_id = $user_id";
    $result = mysqli_query($conn, $query);
    $orders = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($conn);
    return $orders;
}

function get_order_details($order_id) {
    $conn = conn();
    $query = "SELECT * FROM orders WHERE order_id = $order_id";
    $result = mysqli_query($conn, $query);
    $order = mysqli_fetch_assoc($result);
    mysqli_close($conn);
    return $order;
}

function has_ordered_book($user_id, $book_id) {
    $conn = conn();
    $query = "SELECT COUNT(*) AS count FROM orders WHERE user_id = $user_id AND book_id = $book_id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $count = $row['count'];
    mysqli_close($conn);
    return $count > 0;
}

?>
