<?php
    $_SESSION['isLogged'] = false;

    session_destroy();

    header('Location: w3.html');
?>