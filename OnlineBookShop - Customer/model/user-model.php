<?php
require_once 'db.php';

function check_user_existence($username, $password) {
    $conn = conn();
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);


    if ($user && $password === $user['password']) {
        return true;
    } else {
        return false;
    }
}
function create_user($username, $email, $password, $role, $status, $full_name, $nid, $address, $mobile_number)
{
    $conn = conn();
    $query = "INSERT INTO users (username, email, password, role, status, full_name, nid, address, mobile_number) 
              VALUES ('$username', '$email', '$password', '$role', '$status', '$full_name', '$nid', '$address', '$mobile_number')";
    mysqli_query($conn, $query);
    mysqli_close($conn);
}

function update_password($user_id, $current_password, $new_password) {
    $conn = conn();

    $query = "SELECT password FROM users WHERE user_id = $user_id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $stored_password = $row['password'];

    if ($current_password === $stored_password) {

        $update_query = "UPDATE users SET password = '$new_password' WHERE user_id = $user_id";
        mysqli_query($conn, $update_query);
        
        mysqli_close($conn);
        return true; 
    } else {
        mysqli_close($conn);
        return false;
    }
}

function get_user_by_username($username)
{
    $conn = conn();
    $query = "SELECT * FROM users WHERE username = '$username' and status='Active'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);
    mysqli_close($conn);
    return $user;
}
function get_user_by_id($user_id)
{
    $conn = conn();
    $query = "SELECT * FROM users WHERE user_id = $user_id";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);
    mysqli_close($conn);
    return $user;
}

function update_user($user_id, $username, $email, $password, $status, $full_name, $nid, $address, $mobile_number)
{
    $conn = conn();
    $query = "UPDATE users SET 
              username = '$username', 
              email = '$email', 
              password = '$password',  
              status = '$status', 
              full_name = '$full_name', 
              nid = '$nid', 
              address = '$address', 
              mobile_number = '$mobile_number'
              WHERE user_id = $user_id";
    mysqli_query($conn, $query);
    mysqli_close($conn);
}

function delete_user($user_id)
{
    $conn = conn();
    $query = "DELETE FROM users WHERE user_id = $user_id";
    mysqli_query($conn, $query);
    mysqli_close($conn);
}

function get_all_users()
{
    $conn = conn();
    $query = "SELECT * FROM users";
    $result = mysqli_query($conn, $query);
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($conn);
    return $users;
}

function update_user_address($user_id, $password, $new_address) {
    $conn = conn();

    $query = "SELECT password FROM users WHERE user_id = $user_id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $stored_password = $row['password'];

    if ($password === $stored_password) {
        $update_query = "UPDATE users SET address = '$new_address' WHERE user_id = $user_id";
        mysqli_query($conn, $update_query);

        mysqli_close($conn);
        return true; 
    } else {
        mysqli_close($conn);
        return false;
    }
}
?>