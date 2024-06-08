<?php
    session_name('auth');
    session_start();
    $_SESSION = [];
    session_destroy();
    header("Location: /home");
    die();
