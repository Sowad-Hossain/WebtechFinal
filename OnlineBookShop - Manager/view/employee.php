<?php
    session_start();
    require_once('../model/user-model.php');
    $employees = get_users_by_role('Employee');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
    <link rel="stylesheet" href="css/allTableStyles.css">

</head>

<body>
    <?php require_once('navbar.php') ?>
    <?php require_once('right-panel.php') ?>

    <div class="container">

        <h1>Employees</h1>
        <a href="create-new-employee.php">New</a>
        <table class="employees-table" id="employees-table">
            <tr>
                <th> ID </th>
                <th> Fullname </th>
                <th> Username </th>
                <th colspan="3"> Action </th>
            </tr>
            <?php
        foreach($employees as $user) {
            ?>
            <tr>
                <td> <?= $user['user_id'] ?> </td>
                <td> <?= $user['full_name'] ?> </td>
                <td> <?= $user['username'] ?> </td>
                <td> <a href="view-details.php?user_id=<?= $user['user_id'] ?>">View </a> </td>
                <td> <a href="update-information.php?user_id=<?= $user['user_id'] ?>">Edit</a> </td>
                <td> <a href="../controller/delete-user-controller.php?user_id=<?= $user['user_id'] ?>">Delete</a> </td>
            </tr>
            <?php
        }
        ?>
        </table>
    </div>
</body>

</html>