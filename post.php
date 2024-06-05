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
if (!empty($_GET['id']) && is_numeric($_GET['id'])) {
    $sql = "SELECT * FROM post WHERE ID = {$_GET['id']}";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $post = $result->fetch_assoc();
    }
} else{
    header("location: http://localhost:8001/home");
    exit();
}
closeDBConnection($conn)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script src="burger_menu.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost:8001/static/style/style_the-road-ahead.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <title>Escape.</title>
</head>

<body>
    <header>
        <div class="wrapper">
        <div class="header-container">
            <a class="logo" href="/home">
                <img src="http://localhost:8001/static/images/Escape.svg" alt="Escape.">
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
        </div>
    </header>
    <main>
        <?php
        if ($post != []) {
            include 'sample_post.php';
        }
        ?>
    </main>
    <footer>
        <div class="menu">
            <div class="selection_panel">
                <div class="logo_end">
                    <img src="http://localhost:8001/static/images/Escape_end.svg" alt="Escape.">
                </div>
                <nav class="navigation_end">
                    <ul>
                        <li>
                            <a href="#">home</a>
                        </li>
                        <li>
                            <a href="#">categories</a>
                        </li>
                        <li>
                            <a href="#">about</a>
                        </li>
                        <li>
                            <a href="#">contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </footer>
</body>

</html>