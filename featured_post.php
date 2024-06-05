<a class="featured-posts__link" href='/post?id=<?= $post['ID'] ?>'>
    <div class="featured-posts__item">
        <img class="featured-posts__item-background" src=<?= $post['image_card_url'] ?> alt="card-featured_image-photography">
        <p class="featured-posts__item-note  adventure">
           adventure
        </p>
        <h3 class="featured-posts__item-title">
            <?= $post['title'] ?>
        </h3>
        <p class="featured-posts__item-subtitle">
            <?= $post['subtitle'] ?>
        </p>
        <div class="featured-posts__author">
            <img class="featured-posts__author-image" src=<?= $post['author_url'] ?> alt="author_post">
            <p class="featured-posts__author-name">
                <?= $post['author'] ?>
            </p>
            <p class="featured-posts__author-date">
                 <?= date("F d, Y", $post['publish_date'])?>
            </p>
        </div>
    </div>
</a>
