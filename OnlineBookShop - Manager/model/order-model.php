<?php
require_once 'db.php';

function place_order($user_id, $book_id, $quantity, $total_price) {
    $conn = conn();
    $query = "INSERT INTO orders (user_id, book_id, quantity, total_price, status) VALUES ($user_id, $book_id, $quantity, $total_price, 'Pending')";
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

function get_all_orders() {
    $conn = conn();
    $query = "SELECT * FROM orders";
    $result = mysqli_query($conn, $query);
    $orders = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($conn);
    return $orders;
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

function get_order_counts() {
    $conn = conn();
    $query = "SELECT 
                SUM(CASE WHEN status = 'Pending' THEN 1 ELSE 0 END) AS pending_count,
                SUM(CASE WHEN status = 'Completed' THEN 1 ELSE 0 END) AS completed_count,
                SUM(CASE WHEN status = 'Cancelled' THEN 1 ELSE 0 END) AS cancelled_count,
                COUNT(*) AS total_count
              FROM orders";
    $result = mysqli_query($conn, $query);
    $order_counts = mysqli_fetch_assoc($result);
    mysqli_close($conn);
    return $order_counts;
}

function get_total_money_by_status() {
    $conn = conn();
    $query = "SELECT 
                SUM(CASE WHEN status = 'Pending' THEN total_price ELSE 0 END) AS pending_money,
                SUM(CASE WHEN status = 'Completed' THEN total_price ELSE 0 END) AS completed_money
              FROM orders";
    $result = mysqli_query($conn, $query);
    $total_money = mysqli_fetch_assoc($result);
    mysqli_close($conn);
    return $total_money;
}

function update_order_status($order_id, $new_status) {
    $conn = conn();
    $query = "UPDATE orders SET status = '$new_status' WHERE order_id = $order_id";
    mysqli_query($conn, $query);
    mysqli_close($conn);
}

?>