<?php

require_once('db.php'); 

function add_user_attendance($username, $attendance = 0) {
    $conn = conn();
    $user_id = get_user_by_username($username)['user_id'];
    $query = "INSERT INTO user_attendance (user_id, attendance) VALUES ($user_id, $attendance)";
    mysqli_query($conn, $query);
    mysqli_close($conn);
}

function get_user_attendance($user_id) {
    $conn = conn();
    
    $query = "SELECT attendance FROM user_attendance WHERE user_id = $user_id";
    $result = mysqli_query($conn, $query);
    $attendance_row = mysqli_fetch_assoc($result);
    $attendance = $attendance_row ? $attendance_row['attendance'] : null;
    mysqli_close($conn);
    return $attendance;
}

function update_user_attendance($user_id, $new_attendance) {
    $conn = conn();

    
    $query = "UPDATE user_attendance SET attendance = $new_attendance WHERE user_id = $user_id";
    mysqli_query($conn, $query);
    mysqli_close($conn);
}

function increase_attendance($user_id) {
    $conn = conn();    
    $query = "UPDATE user_attendance SET attendance = attendance + 1 WHERE user_id = $user_id";
    mysqli_query($conn, $query);
    mysqli_close($conn);
}

?>

