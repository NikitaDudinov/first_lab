<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost:8001/static/style/style_admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <title>Admin</title>
</head>

<body>
<header class="header">
    <div class="header__wrapper">
        <a href="http://localhost:8001/home">
            <img class="header__logo" src=".\images\admin\Logo.svg" alt="">
        </a>
        <div class="header__account">
            <img class="header__account_image" src=".\images\admin\Avatar.png" alt="">
            <a class="header__account_exit" href="">
                <img class="header__account_exit-icon" src=".\images\admin\exit.png" alt="">
            </a>
        </div>
    </div>
</header>
<main class="main">
    <form class="form-example" method="post" action="./admin.php">
        <div class="add-post">
            <div class="add-post__wrapper">
                <h1 class="add-post__title">New Post</h1>
                <p class="add-post__subtitle">Fill out the form bellow and publish your article</p>
            </div>
            <button type="submit" id="add-post__button">Publish</button>
        </div>
        <div id="total_error">
            <img class="error_img" src="./images/admin/alert-circle.png" alt="">
            <p class="error_title">Whoops! Some fields need your attention :o</p>
        </div>
        <div id="publish_complete">
            <img class="complete_img" src="./images/admin/check-circle.png" alt="">
            <p class="complete_title">Publish Complete!</p>
        </div>
        <div class="main-information">
            <h2 class="main-information__title">Main Information</h2>
            <div class="main-information__wrapper">
                <div class="create__post">
                    <div class="add_data">
                        <label for="title" class="input-label">Title</label>
                        <input type="text" id="title" name="title" placeholder="New Post"/>
                    </div>
                    <p id="error__title">Title is required.</p>
                    <div class="add_data">
                        <label for="short_description" class="input-label">Short description</label>
                        <input type="text" id="short_description" name="short_description" placeholder="Please, enter any description"/>
                    </div>
                    <p id="error__subtitle">Short description is required.</p>
                    <div class="add_data">
                        <label for="author_name" class="input-label">Author name</label>
                        <input type="text" id="author_name" name="author_name" placeholder="Please, enter name author"/>
                    </div>
                    <p id="error__name">Author name is required.</p>
                    <div class="add_author_photo">
                        <label for="author_photo" class="label_image_author">Author Photo
                            <div class="author_photo_wrapper">
                                <img id="sample_author_photo" src="./images/admin/SampleAvatar.png">
                                <img id="author_photo_preview">
                                <input type="file" id="author_photo" name="author_photo"/>
                                <p id="upload_photo">Upload</p>
                            </div>
                        </label>
                        <div id="action-images">
                            <label for="upload_author">
                                <div class="upload_wrapper">
                                    <img class="camera" src="./images/admin/camera.png" alt="">
                                    <p class="upload_new_images">Upload New</p>
                                    <input type="file" id="upload_author" name="author_photo"/>
                                </div>
                            </label>
                            <label for="delete_author">
                                <div class="delete_wrapper">
                                    <img class="trash" src="./images/admin/trash.png" alt="">
                                    <p class="delete_author_image">Remove</p>
                                    <input type="checkbox" id="delete_author"/>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="add_data">
                        <label for="publish_date" class="input-label">Publish Date</label>
                        <input type="date" id="publish_date" name="publish_date"/>
                    </div>
                    <p id="error__date">Date is required.</p>
                    <div class="add_data">
                        <label for="hero_image" class="input-label">Hero Image
                            <img id="sample_hero_image" src="./images/admin/HeroImage.png"" alt="">
                            <img id="hero_image_preview">
                            <input type="file" id="hero_image" name="hero_image"/>
                        </label>
                        <p id="hero_image__description">Size up to 10mb. Format: png, jpeg, gif.</p>
                        <div id="action-images_Hero">
                            <label for="upload_Hero">
                                <div class="upload_wrapper">
                                    <img class="camera" src="./images/admin/camera.png" alt="">
                                    <p class="upload_new_images">Upload New</p>
                                    <input type="file" id="upload_Hero" name="author_photo"/>
                                </div>
                            </label>
                            <label for="delete_Hero">
                                <div class="delete_wrapper">
                                    <img class="trash" src="./images/admin/trash.png" alt="">
                                    <p class="delete_author_image">Remove</p>
                                    <input type="checkbox" id="delete_Hero"/>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="add_data">
                        <label for="hero_image_min" class="input-label">Hero Image
                            <img id="sample_hero_image_min" src="./images/admin/HeroImageMini.png"" alt="">
                            <img id="hero_image_min_preview">
                            <input type="file" id="hero_image_min" name="hero_image_min"/>
                        </label>
                        <p id="hero_min__image__description">Size up to 5mb. Format: png, jpeg, gif.</p>
                        <div id="action-images_Hero_min">
                            <label for="upload_Hero_min">
                                <div class="upload_wrapper">
                                    <img class="camera" src="./images/admin/camera.png" alt="">
                                    <p class="upload_new_images">Upload New</p>
                                    <input type="file" id="upload_Hero_min" name="author_photo"/>
                                </div>
                            </label>
                            <label for="delete_Hero_min">
                                <div class="delete_wrapper">
                                    <img class="trash" src="./images/admin/trash.png" alt="">
                                    <p class="delete_author_image">Remove</p>
                                    <input type="checkbox" id="delete_Hero_min"/>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="sample-post">
                    <p class="sample-post__title">Article preview</p>
                    <div class="post-view">
                        <h2 id="post-view__title">New Post</h2>
                        <p id="post-view__subtitle">Please, enter any description</p>
                        <img id="sample__article" src="./images/admin/SampleArticleImages.png">
                        <img id="sample__article-preview">
                    </div>
                    <p class="sample-post__title">Post card preview</p>
                    <div class="card-view">
                        <div class="sample-card">
                            <img id="sample__card-image" src="./images/admin/SampleArticleImages.png">
                            <img id="sample__card-preview">
                            <h3 id="card-view__title">New Post</h3>
                            <p id="card-view__subtitle">Please, enter any description</p>
                            <div class="card-information">
                                <div class="card-information-wrapper">
                                    <img id="author_card-sample" src="./images/admin/authorCard.png" alt="">
                                    <img id="author_card-preview">
                                    <p id="card_author_name">Enter author name</p>
                                </div>
                                <p id="publish_date-card"><?= date("m/d/Y") ?></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="add_content">
            <h2 class="add_content__title">Content</h2>
            <label class="add_content__subtitle" for="post_content">Post content (plain text)</label>
            <textarea type="text" id="post_content" name="post_content" placeholder="Type anything you want ..."></textarea>
            <p id="error__content">Content is required.</p>
        </div>
    </form>
    </div>
</main>
<footer>
    <script src="admin.js"></script>
</footer>
</body>
</html>