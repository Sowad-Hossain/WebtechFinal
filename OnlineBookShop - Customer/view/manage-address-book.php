<?php
    require '../controller/status-message.php';
    require '../model/user-model.php';
    session_start();
    $user = get_user_by_username($_COOKIE['username']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Address Book</title>
    <link rel="stylesheet" href="css/profileStyles.css">

</head>

<body>
    <?php require_once('navbar.php') ?>
    <h1 align="center">Manage Address Book</h1>
    <div class="container">
        <form action="../controller/manage-address-book-controller.php" method="post"
            onsubmit="return validateManageAddressBookForm()">
            <?php if(isset($_GET['status']))  echo get_status_message($_GET['status']) ?>
            <table class="manage-address-book-table" id="manage-address-book-table">
                <tr>
                    <td>
                        New Address <br>
                        <textarea name="address" cols="30" rows="10"><?= $user['address'] ?></textarea><br><br>
                        Account Password <br>
                        <input type="password" name="password"><br><br>
                        <button class="save-changes-button" id="save-changes-button">Save Changes</button>
                    </td>
                </tr>
            </table>
        </form>
        <a href="profile.php"><button>Back</button></a>

    </div>

    <?php require_once('footer.php') ?>
</body>

</html>