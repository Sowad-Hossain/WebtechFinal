<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New User</title>
    <link rel="stylesheet" href="css/addBookAndUserStyles.css">
    <script src="../controller/js/script.js"></script>

</head>

<body>
    <?php require_once('navbar.php') ?>
    <?php require_once('side-panel.php') ?>
    <div class="container">
        <h1 align="center">Add User</h1>
        <form action="../controller/add-user-controller.php" method="post" onsubmit="return validateAddUserForm()">
            <table class="create-user-table" id="create-user-table">
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
                        Role<br>
                        <input type="radio" name="role" id="role" value="Employee"> Employee
                        <input type="radio" name="role" id="role" value="Manager"> Manager
                        <button type="submmit">Create User</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <?php require_once('footer.php') ?>
</body>

</html>