<?php
session_start();
require '../controller/status-message.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Employee</title>
    <link rel="stylesheet" href="css/allFormStyles.css">
    <script src="../controller/js/script.js"></script>
</head>

<body>
    <?php require_once('navbar.php') ?>
    <?php require_once('right-panel.php') ?>

    <div class="container">
        <h1 align="center">Create New Employee</h1>
        <form action="../controller/create-new-employee-controller.php" method="post"
            onsubmit="return validateCreateNewEmployeeForm()">
            <table class="create-new-employee-table" id="create-new-employee-table">
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
                        <button type="submit">Create Employee</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>