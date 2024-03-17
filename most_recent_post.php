<a href="#">
    <div class="most-recent__item">
        <img class='most-recent__item-background' src=<?= $post['image'] ?> alt="card-most-recent_image">
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
            <img class='most-recent__author-image' src=<?= $post['img_modifier'] ?> alt="author_post">
            <p class="most-recent__author-name">
                <?= $post['author'] ?>
            </p>
            <p class="most-recent__author-date">
                <?= $post['data'] ?>
            </p>
        </div>
    </div>
</a>