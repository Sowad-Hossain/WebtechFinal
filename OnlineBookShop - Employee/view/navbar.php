<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/navBarStyles.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <nav>
        <table class="navbar" id="navbar">
            <tr>
                <div class="navBarItems">
                    <td>
                        <div class="logo">
                            <a href="profile-update.php"><img src="../vendor/logo.png" alt="" height="50px"
                                    width="100px"></a>
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
                            <select name="profile" onchange="location = this.value">
                                <option disabled selected hidden><?=$_SESSION['user']['username'] ?></option>
                                <option value="profile.php">Profile</option>
                                <option value="../controller/logout.php">Log Out</option>
                            </select>
                        </div>
                    </td>
                </div>
            </tr>

        </table>
    </nav>
</body>