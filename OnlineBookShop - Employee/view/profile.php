<?php
    session_start();
    require_once('../model/user-model.php');
    $user = $_SESSION['user'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/profileStyles.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <?php require_once('navbar.php') ?>
    <?php require_once('side-panel.php') ?>
    <div class="container">
        <a href="view-profile.php?user_id=<?=$user['user_id']?>"> <span class="material-symbols-outlined">
                pageview
            </span><br>View Profile</a>
        <a href="edit-profile-info.php?user_id=<?=$user['user_id']?>"><span class="material-symbols-outlined">
                edit
            </span><br>Edit Profile Information</a>
        <a href="change-password.php"><span class="material-symbols-outlined">
                lock_reset
            </span><br>Change Password</a>

    </div>
    <?php require_once('footer.php') ?>
</body>

</html>