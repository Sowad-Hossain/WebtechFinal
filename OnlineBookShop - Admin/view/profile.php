<?php
    session_start();
    require('../model/user-model.php');
    $user = $_SESSION['user'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/bookDetailsStyles.css">

</head>

<body>
    <?php require_once('navbar.php') ?>
    <?php require_once('side-panel.php') ?>


    <div class="container">
        <h1 align="center">Profile</h1>
        <table class="profile-table" id="profile-table">
            <tr>
                <td>
                    <p><strong>FullName: </strong> <?= $user['full_name'] ?></p>
                    <p><strong>Email: </strong> <?= $user['email'] ?></p>
                    <p><strong>Mobile Number: </strong><?= $user['mobile_number'] ?></p>
                    <p><strong>Address: </strong> <?= $user['address'] ?></p>
                    <p><strong>Username: </strong> <?= $user['username'] ?></p>
                    <p><strong>NID: </strong> <?= $user['nid'] ?></p>
                </td>
            </tr>
        </table>
        <a href="edit-profile-info.php?user_id=<?=$user['user_id']?>"><button>Edit Profile Info</button></a>
    </div>
    <?php require_once('footer.php') ?>
</body>

</html>