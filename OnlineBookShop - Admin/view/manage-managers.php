<?php
    require('../model/user-model.php');
    session_start();
    $managers = get_users_by_role("Manager");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Managers</title>
    <link rel="stylesheet" href="css/manageUsersStyles.css" />

</head>

<body>
    <?php require_once('navbar.php') ?>
    <?php require_once('side-panel.php') ?>
    <div class="container">

        <table class="managers-table" id="managers-table">
            <tr>
                <td colspan="5">
                    <h1>Manager Details</h1>
                </td>
                <td></td>
                <td>
                    <a href="user-management.php">Back</a>
                    <a href="add-user.php">Add Manager</a>
                </td>
            </tr>
            <tr>
                <th> ID </th>
                <th> Fullname </th>
                <th> Username </th>
                <th colspan="4"> Action </th>
            </tr>
            <?php
            foreach($managers as $user) {
                ?>
            <tr>
                <td> <?= $user['user_id'] ?> </td>
                <td> <?= $user['full_name'] ?> </td>
                <td> <?= $user['username'] ?> </td>
                <td> <a href="view-profile.php?user_id=<?= $user['user_id'] ?>">View Details</a> </td>
                <td> <a href="edit-profile-info.php?user_id=<?= $user['user_id'] ?>">Update Information</a> </td>
                <td> <a href="../controller/ban-user-controller.php?user_id=<?=$user['user_id']?>">Ban Manager</a> </td>
                <td> <a
                        href="../controller/change-user-role-controller.php?user_id=<?=$user['user_id']?>&role=Employee">Demote
                        to Employee</a> </td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
    <?php require_once('footer.php') ?>
</body>

</html>