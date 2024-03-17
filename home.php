<?php
$featured_posts = [
    [
        'id' => 1,
        'image' => "http://localhost:8001/static/images/index/featered-posts/background1.jpg",
        'title' => 'The Road Ahead',
        'subtitle' => 'The road ahead might be paved - it might not be',  
        'note' => 'photography',
        'img_modifier' => 'http://localhost:8001/static/images/index/first_author.jpg',
        'author' => 'Max Vogels',
        'data' => date("F d, Y", 1443139200),
        'link' => '#',
    ],
    [
        'id' => 2,
        'image' => "http://localhost:8001/static/images/index/featered-posts/background2.jpg",
        'title' => 'From Top Down',
        'subtitle' => 'Once a year, go someplace you’ve never been before.',
        'note' => 'adventure',
        'img_modifier' => 'http://localhost:8001/static/images/index/second_author.jpg',
        'author' => 'William Wong',
        'data' => date("F d, Y", 1443139200),
        'link' => '#'
    ],
];
$most_recent_posts = [
    [
        'image' => "http://localhost:8001/static/images/index/most-recent/image1.jpg",
        'title' => 'Still Standing Tall',
        'subtitle' => 'Life begins at the end of your comfort zone.',
        'img_modifier' => 'http://localhost:8001/static/images/index/second_author.jpg',
        'author' => 'William Wong',
        'data' => date("m/d/Y", 1443139200),
    ],
    [
        'image' => "http://localhost:8001/static/images/index/most-recent/image2.jpg",
        'title' => 'Sunny Side Up',
        'subtitle' => 'No place is ever as bad as they tell you it’s going to be.',
        'img_modifier' => 'http://localhost:8001/static/images/index/first_author.jpg',
        'author' => 'Max Vogels',
        'data' => date("m/d/Y", 1443139200),
    ],
    [
        'image' => "http://localhost:8001/static/images/index/most-recent/image3.jpg",
        'title' => 'Water Falls',
        'subtitle' => 'We travel not to escape life, but for life not to escape us.',
        'img_modifier' => 'http://localhost:8001/static/images/index/first_author.jpg',
        'author' => 'Max Vogels',
        'data' => date("m/d/Y", 1443139200),
    ],
    [
        'image' => "http://localhost:8001/static/images/index/most-recent/image4.jpg",
        'title' => 'Through the Mist',
        'subtitle' => 'Travel makes you see what a tiny place you occupy in the world.',
        'img_modifier' => 'http://localhost:8001/static/images/index/second_author.jpg',
        'author' => 'William Wong',
        'data' => date("m/d/Y", 1443139200),
    ],
    [
        'image' => "http://localhost:8001/static/images/index/most-recent/image5.jpg",
        'title' => 'Awaken Early',
        'subtitle' => 'Not all those who wander are lost.',
        'img_modifier' => 'http://localhost:8001/static/images/index/first_author.jpg',
        'author' => 'Max Vogels',
        'data' => date("m/d/Y", 1443139200),
    ],
    [
        'image' => "http://localhost:8001/static/images/index/most-recent/image6.jpg",
        'title' => 'Try it Always',
        'subtitle' => 'The world is a book, and those who do not travel read only one page.',
        'img_modifier' => 'http://localhost:8001/static/images/index/first_author.jpg',
        'author' => 'Max Vogels',
        'data' => date("m/d/Y", 1443139200),
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
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
            <nav class="list-posts">
                <?php
                foreach ($featured_posts as $post) {
                    include 'featured_post.php';
                }
                ?>
            </nav>
        </div>
        <div class="most-recent">
            <h2 class="most-recent__title">Most Recent</h2>
            <hr class="line">
            <nav class="list-posts">
                <?php
                foreach ($most_recent_posts as $post) {
                    include 'most_recent_post.php';
                }
                ?>
            </nav>
        </div>
    </main>
    <footer class="footer">
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
    </footer>
</body>

</html>