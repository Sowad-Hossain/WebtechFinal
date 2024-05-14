<?php
session_start();
require('../model/rating-model.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rating = $_POST["rating"];
    $book_id = $_POST["book_id"];
    $return_url = $_POST["return_url"];
    $user_id = $_SESSION['user']['user_id'];

    add_rating($user_id, $book_id, $rating);
    header('location: ../view/'.$return_url . '&status=15');
    exit();

} 
header('location: ../view/sign-in.php');
?>
