    <?php
        require '../controller/status-message.php'
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign In</title>
        <script src="../controller/js/authScript.js"></script>
        <link rel="stylesheet" href="css/authStyles.css" />
    </head>

    <body>
        <div class="tempNavBar">
            <h1>Online Book Shop</h1>
        </div>
        <div class="container">

            <form action="../controller/sign-in-controller.php" method="post" onsubmit="return validateSignInForm()">

                <?php if(isset($_GET['status']))  echo get_status_message($_GET['status']) ?>
                <table class="sign-in-table" id="sign-in-table">
                    <tr>
                        <td>
                            Username <br>
                            <input type="text" name="username" placeholder=""><br><br>
                            Password <br>
                            <input type="text" name="password"><br><br>
                            <button class="sign-in-button" id="sign-in-button">Sign In</button>
                        </td>
                    </tr>
                </table>
            </form>
            Don't have an account yet? <a href="sign-up.php">create one right now!</a>
        </div>

    </body>

    </html>