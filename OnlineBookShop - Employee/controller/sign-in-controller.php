<?php
require_once '../model/user-model.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate 

    if (check_user_existence($username, $password)) {
        session_start();

        $user = get_user_by_username($username);
        $_SESSION['user'] = $user;
        setcookie('username', $username, time() + 3600, '/');

        if($user['role'] == "Admin") {
            header("Location: ../view/dashboard.php");
            exit();
        }
        else if($user['role'] == "Customer") {
            //inititate a cart for customer
            $_SESSION['cart'] = array();
            header("Location: ../view/customer-home.php");
            exit();
        }
        else if($user['role'] == "Employee") {
            header("Location: ../view/profile-update.php");
            exit();
        }
        else if($user['role'] == "Manager") {
            header("Location: ../view/manager-home.php");
            exit();
        }
        else {
            header("Location: ../view/sign-in.php?status=21");
            exit();
        }

    } else {
        header("Location: ../view/sign-in.php?status=1");
        exit();
    }
}
?>
