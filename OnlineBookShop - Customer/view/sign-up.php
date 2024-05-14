<?php
    require '../controller/status-message.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <script src="../controller/js/authScript.js"></script>
    <link rel="stylesheet" href="css/authStyles.css" />

<body>
    <div class="tempNavBar">
        <h1>Online Book Shop</h1>
    </div>
    <div>

        <form action="../controller/sign-up-controller.php" method="post" onsubmit="return validateSignUpForm()">
            <?php if(isset($_GET['status']))  echo get_status_message($_GET['status']) ?>
            <table class="registration-table" id="registration-table">
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
                        <button class="sign-up-button" id="sign-up-button">Sign Up</button>
                    </td>
                </tr>
            </table>
        </form>
        <a href="sign-in.php">Go Back</a>
    </div>
</body>

</html>