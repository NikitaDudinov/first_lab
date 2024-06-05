<a class="most_recent_post_link" href='/post?id=<?= $post['ID'] ?>'>
    <div class="most-recent__item">
        <img class='most-recent__item-background' src=<?= $post['image_card_url'] ?> alt="card-most-recent_image">
        <div class="most-recent__item-body">
            <h3 class="most-recent__item-title">
                <?= $post['title'] ?>
            </h3>
            <p class="most-recent__item-subtitle">
                <?= $post['subtitle'] ?>
            </p>
        </div>
        <hr class="most-recent__line">
        <div class="most-recent__author">
            <img class='most-recent__author-image' src=<?= $post['author_url'] ?> alt="author_post">
            <p class="most-recent__author-name">
                <?= $post['author'] ?>
            </p>
            <p class="most-recent__author-date">
                <?= date("m/d/Y", $post['publish_date'])?>
            </p>
        </div>
    </div>
</a>