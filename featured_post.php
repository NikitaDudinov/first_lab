<a href='/post?id=<?= $post['id'] ?>'>
    <div class="featured-posts__item">
        <img class="featured-posts__item-background" src=<?= $post['image'] ?> alt="card-featured_image-photography">
        <p class="featured-posts__item-note  <?= $post['note'] ?>">
            <?= $post['note'] ?>
        </p>
        <h3 class="featured-posts__item-title">
            <?= $post['title'] ?>
        </h3>
        <p class="featured-posts__item-subtitle">
            <?= $post['subtitle'] ?>
        </p>
        <div class="featured-posts__author">
            <img class="featured-posts__author-image" src=<?= $post['img_modifier'] ?> alt="author_post">
            <p class="featured-posts__author-name">
                <?= $post['author'] ?>
            </p>
            <p class="featured-posts__author-date">
                <?= $post['data'] ?>
            </p>
        </div>
    </div>
</a>