<?php
session_start();
require_once ('../model/review-model.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user_id = $_SESSION['user']['user_id'];
    $book_id = $_POST["book_id"];
    $review_text = $_POST["review"];
    $return_url = $_POST["return_url"];

    add_review($user_id, $book_id, $review_text);

    header("Location: ../view/$return_url&status=16");
    exit();

} else {
    header('location: ../view/sign-in.php');
}
?>