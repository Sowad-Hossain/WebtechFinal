<?php
    session_start();
    require_once('../model/user-model.php');
    require_once('../model/user-attendance-model.php');
    $employees = get_users_by_role('Employee');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rating System</title>
    <link rel="stylesheet" href="css/allTableStyles.css">
</head>

<body>
    <?php require_once('navbar.php') ?>
    <?php require_once('side-panel.php') ?>
    <div class="container">
        <table class="rating-system-table" id="rating-system-table">
            <tr>
                <td colspan="4">
                    <h1 align="center">Rating System</h1>
                </td>
            </tr>
            <tr>
                <th> ID </th>
                <th> Employees Name </th>
                <th> Attendance </th>
                <th> Action </th>
            </tr>
            <?php
            foreach($employees as $user) {
                ?>
            <tr>
                <td> <?= $user['user_id'] ?> </td>
                <td> <?= $user['full_name'] ?> </td>
                <td> <?= get_user_attendance($user['user_id'])?> </td>
                <td> <a href="../controller/give-attendance-controller.php?user_id=<?= $user['user_id'] ?>"> Give
                        Attendance </a> </td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
    <?php require_once('footer.php') ?>
</body>

</html>