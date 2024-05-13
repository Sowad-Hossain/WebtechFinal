<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <link rel="stylesheet" href="css/userManagementStyles.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <?php require_once('navbar.php') ?>
    <?php require_once('side-panel.php') ?>

    <div class="container">

        <a href="manage-managers.php"><span class="material-symbols-outlined">
                person
            </span><br>Manager</a>
        <a href="manage-employees.php"><span class="material-symbols-outlined">
                support_agent
            </span><br>Employee</a>
        <a href="manage-customers.php"><span class="material-symbols-outlined">
                groups
            </span><br>Customer</a><br>
        <table class="last-details-table" align="center">
            <tr>
                <td><a href="dashboard.php"><button>Back</button></a></td>
            </tr>
        </table><br><br>
        <br><br>

        <br><br>
    </div>
    <?php require_once('footer.php') ?>
</body>

</html>