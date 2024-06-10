<?php
session_name('auth');
session_start();
$userId = $_SESSION['user_id'] ?? null;
if ($userId !== null){
    header("Location: /admin");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost:8001/static/style/style_login_page.css">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <script src="md5.min.js"></script>
    <script src="login.js"></script>
    <title>login</title>
</head>
<body>
   <main class="main">
        <div class="login-page">
                <div class="logo">
                    <img src="./images/login_page/Logo.svg" alt="Logo">
                    <p class="logo-description">Log in to start creating</p>
                </div>
                <div class="login-form">
                    <h1 class="login-form__title">Log In</h1>
                    <div id="error-message" class="error-message hidden">
                        <img id="error-message__img" class="hidden" src=".\images\admin\alert-circle.png" alt="">
                        <p id="error-message__title" class="error-message__title hidden">A-Ah! Check all fields,</p>
                    </div>
                    <form class="login-form__input" action="./login_page" method="POST">
                        <div class="add_data">
                            <label for="email" class="input-label">Email</label>
                            <input type="text" id="email" name="email"/>
                            <p  id="error__email"></p>
                        </div>
                        <div class="add_data">
                            <label for="password" class="input-label">Password</label>
                            <div class="enter-password">
                                <input type="password" id="password" name="password"/>
                                <img id="show-password" src="./images/login_page/eye-off.png" alt="show password">
                            </div>         
                            <p  id="error__password"></p>
                        </div>
                        <button id="login-form__submit" type="submit">Log In</button>
                    </form>
                </div>
        </div>
   </main> 
</body>
</html>