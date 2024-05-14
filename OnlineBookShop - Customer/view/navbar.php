<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/navBarStyles.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <nav>
        <table class="navbar" id="navbar">
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <div class="call">
                        <span class="material-symbols-outlined">
                            call
                        </span>
                        <span id="callText">1620</span>
                    </div>
                </td>
            </tr>
            <tr>
                <div class="navBarItems">
                    <td>
                        <div class="logo">
                            <a href="customer-home.php"><img src="../vendor/logo.png" alt="" height="100px"
                                    width="200px"></a>
                        </div>
                    </td>
                    <td>
                        <div class="search">
                            <input type="text" name="search" placeholder="Search here...">
                            <span class="material-symbols-outlined">
                                search
                            </span>
                        </div>
                    </td>
                    <td>
                        <div class="others">
                            <a href="profile.php">
                                <span class="material-symbols-outlined">
                                    person
                                </span>
                            </a>
                            <a href="wishlist.php"><span class="material-symbols-outlined">
                                    favorite
                                </span>
                            </a>
                            <a href="cart.php"><span class="material-symbols-outlined">
                                    shopping_cart
                                </span>
                            </a>
                            <a href="../controller/logout.php">
                                <span class="material-symbols-outlined">
                                    logout
                                </span>
                                <span id="logoutText">Logout</span>
                            </a>
                        </div>
                    </td>
                </div>
            </tr>

        </table>
    </nav>
</body>

</html>