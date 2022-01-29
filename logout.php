<?php

    session_start(); //session start

    session_unset(); //unset the data

    session_destroy(); //destroy the session

    $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/login.php';

    header('Location: ' . $home_url);

    exit();