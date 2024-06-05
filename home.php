<?php
const HOST = 'localhost';
const USERNAME = 'root';
const PASSWORD = '';
const DATABASE = 'blog';
function createDBConnection(): mysqli
{
    $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

function closeDBConnection(mysqli $conn): void
{
    $conn->close();
}

$conn = createDBConnection();
$sql = "SELECT * FROM post";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $posts = $result->fetch_all(MYSQLI_ASSOC);
}
closeDBConnection($conn)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script src="burger_menu.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost:8001/static/style/style_index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <title>Espace.</title>
    
</head>

<body>
    <header class="header">
        <div class="header-container">
            <a class="logo" href="/home">
                <img src="http://localhost:8001/static/images/Escape_end.svg" alt="Escape.">
            </a>
            <nav class="navigation-header">
                <ul class="navigaton__list">
                    <li class="navigation__item">
                        <a class="navigation__link" href="#">home</a>
                    </li>
                    <li class="navigation__item">
                        <a class="navigation__link" href="#">categories</a>
                    </li>
                    <li class="navigation__item">
                        <a class="navigation__link" href="#">about</a>
                    </li>
                    <li class="navigation__item">
                        <a class="navigation__link" href="#">contact</a>
                    </li>
                </ul>
            </nav>
            <img id="burger_menu" src="../images/index/burger_image.png" alt="burger_image">
            <div id="burger__navigation">
                <ul class="burger__list">
                    <li class="burger__item">
                        <a class="burger__item__link" href="#">home</a>
                    </li>
                    <li class="burger__item">
                        <a class="burger__item__link" href="#">categories</a>
                    </li>
                    <li class="burger__item">
                        <a class="burger__item__link" href="#">about</a>
                    </li>
                    <li class="burger__item">
                        <a class="burger__item__link" href="#">contact</a>
                    </li>
                </ul>
            </div>
        </div>
        <h1 class="header__title">
            Let's do it together.
        </h1>
        <p class="header__subtitle">
            We travel the world in search of stories. Come along for the ride.
        </p>
        <a class="header__last-posts-link" href="#">
            View Latest Posts
        </a>
    </header>
    <main class="main">
        <div class="wrapper">
            <nav class="choose-theme">
                <ul class="choose-theme__list">
                    <li class="choose-theme__item">
                        <a class="choose-theme__link" href="#">Nature</a>
                    </li>
                    <li class="choose-theme__item">
                        <a class="choose-theme__link" href="#">Photography</a>
                    </li>
                    <li class="choose-theme__item">
                        <a class="choose-theme__link" href="#">Relaxation</a>
                    </li>
                    <li class="choose-theme__item">
                        <a class="choose-theme__link" href="#">Vacation</a>
                    </li>
                    <li class="choose-theme__item">
                        <a class="choose-theme__link" href="#">Travel</a>
                    </li>
                    <li class="choose-theme__item">
                        <a class="choose-theme__link" href="#">Adventure</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="featured-posts">
            <h2 class="featured-posts__title">Featured Posts</h2>
            <hr class="line">
            <nav class="featured-list-posts">
                <?php
                foreach ($posts as $post) {
                    if ($post['featured'] == 1) {
                        include 'featured_post.php';
                    }
                }
                ?>
            </nav>
        </div>
        <div class="most-recent">
            <h2 class="most-recent__title">Most Recent</h2>
            <hr class="line">
            <nav class="list-posts">
                <?php
                foreach ($posts as $post) {
                    if ($post['featured'] != 1) {
                        include 'most_recent_post.php';
                    }
                }
                ?>
            </nav>
        </div>
    </main>
    <footer class="footer">
        <div class="footer-title-container">
            <h2 class="footer__title">Stay in Touch</h2>
            <hr class="footer__line">
        </div>
        <form class="post_email" action="POST">
            <input class="post_email_input" type="text" name="email" id="email" placeholder="Enter your email address"/>
            <button class="post_email_button" type="submit">
                Submit
            </button>
        </form>
        <div class="container-footer">
            <div class="container">
                <div class="logo">
                    <img src="http://localhost:8001/static/images/Escape_end.svg" alt="Escape.">
                </div>
                <nav class="navigation">
                    <ul class="navigaton__list">
                        <li class="navigation__item">
                            <a class="navigation__link" href="#">home</a>
                        </li>
                        <li class="navigation__item">
                            <a class="navigation__link" href="#">categories</a>
                        </li>
                        <li class="navigation__item">
                            <a class="navigation__link" href="#">about</a>
                        </li>
                        <li class="navigation__item">
                            <a class="navigation__link" href="#">contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </footer>
</body>
</html>