<?php
    session_start();
    require('../model/user-model.php');
    $user = get_user_by_id($_SESSION['user']['user_id']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/managerHome.css">
</head>

<body>
    <?php require_once('navbar.php') ?>
    <div class="rightPanel"><?php require_once('right-panel.php') ?></div>
    <div class="container">
        <h1 align="center">Welcome <?= $user['full_name'] ?></h1>
        <div class="others">
            <?= date('j F, Y')?>
            <a href="edit-information.php"><button>Edit Information</button></a>
            <a href="change-password.php"><button>Change Password</button></a>
        </div>
        <br>
        <br>
        <div>
            <table class="manager-home-table" id="manager-home-table">
                <tr>
                    <td>
                        <h2 align="center">Profile</h2>
                        <p><strong>Fullname:</strong> <?= $user['full_name'] ?></p>
                        <p><strong>Email:</strong> <?= $user['email'] ?></p>
                        <p><strong>Mobile Number:</strong> <?= $user['mobile_number'] ?></p>
                        <p><strong>Address:</strong> <?= $user['address'] ?></p>
                        <p><strong>Username:</strong> <?= $user['username'] ?></p>
                        <p><strong>NID:</strong> <?= $user['nid'] ?></p>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>