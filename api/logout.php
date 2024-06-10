<?php
    session_name('auth');
    session_start();
    if(isset($_SESSION['user_id'])){
        $_SESSION = [];
        session_destroy();
        echo('200');
    }
