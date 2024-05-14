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
    <title>Profile Update</title>
    <link rel="stylesheet" href="css/dashboardStyles.css">
    <script src="../controller/js/script.js"></script>
</head>
<body>
    <?php require_once('navbar.php') ?>
    <?php require_once('side-panel.php') ?>
    <div class="container">
        <div class="dashboardForm">

            <form action="../controller/add-user-controller.php" method="post"
                onsubmit="return validateProfileUpdateForm()">
                <table class="add-employee-table" id="add-employee-table">
                    <tr>
                        <td>
                            <h1 align="center">Add Employee</h1>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Fullname <br>
                            <input type="text" name="full_name"><br><br>
                            Email <br>
                            <input type="text" name="email"><br><br>
                            Mobile Number <br>
                            <input type="text" name="mobile_number"><br><br>
                            Address <br>
                            <textarea type="text" name="Address"> </textarea><br><br>
                            Username <br>
                            <input type="text" name="username"><br><br>
                            Password <br>
                            <input type="text" name="password"><br><br>
                            NID <br>
                            <input type="text" name="nid"><br><br>
                            <button type="submit">Confirm</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="dashboardTable">
            <table class="employee-table" id="employee-table">
                <tr>
                    <td colspan="6">
                        <h1 align="center">Profile Update</h1>
                    </td>
                </tr>
                <tr>
                    <th> ID </th>
                    <th> Employees Name </th>
                    <th> Status </th>
                    <th colspan="3"> Action </th>
                </tr>
                <?php
            foreach($employees as $user) {
                ?>
                <tr>
                    <td> <?= $user['user_id'] ?> </td>
                    <td> <?= $user['full_name'] ?> </td>
                    <td> <?= $user['status'] ?> </td>
                    <td> <a href="view-profile.php?user_id=<?= $user['user_id'] ?>">View
                        </a> </td>
                    <td> <a href="edit-profile-info.php?user_id=<?= $user['user_id'] ?>">Edit
                        </a> </td>
                    <td> <a href="../controller/delete-user-controller.php?user_id=<?= $user['user_id'] ?>">Delete
                        </a> </td>
                </tr>
                <?php
            }
            ?>
            </table>
        </div>
    </div>
    <?php require_once('footer.php') ?>
</body>

</html>