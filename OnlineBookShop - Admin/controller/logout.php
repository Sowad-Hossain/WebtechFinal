<?php
    session_start();
    session_destroy();
    setcookie('username', '', time() - 1, '/');
    header('Location: ../view/sign-in.php')

?>