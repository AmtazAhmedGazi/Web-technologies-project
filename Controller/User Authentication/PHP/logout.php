<?php
    session_start();
    session_unset();
    setcookie('status', 'true', time()-10, '/');
    session_destroy();
    header('location: ../../../View/User%20Authentication/login.html');


?>