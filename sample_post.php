<div class="headline">
    <div class="name">
        <?= $post['title'] ?>
    </div>
    <div class="description">
        <?= $post['subtitle'] ?>
    </div>
</div>
<img class="image" src=<?= $post['image_url']?> alt="Northern lights">
<div class="wrapper">
    <div class="article">
        <p class="article_text">
            <?= $post['content'] ?>
        </p>
    </div>
</div>