<?php
include_once("templates/header.php");

?>
<main>
    <div id="title-container">
        <h1>Blog Codar</h1>
        <p>O seu Blog de progrmação</p>
    </div>
    <div id="posts-container">
        <?php foreach($posts as $posts): ?>
        <div class="post-box">
            <img src="<?= $BASE_URL?>/img/<?= $posts['img']?>" alt="<?=$posts['title']?>">
            <h2 class="post-title">
                <a href="<? $BASE_URL ?>post.php?id=<?= $posts['id'] ?>"><?=$posts['title']?></a>
            </h2>
            <p class="post-description"><?= $posts['description']?></p>
            <div class="tags-container">
                <?php foreach($posts['tags'] as $tag):?>
                <a href="#"><?= $tag?></a>
                <?php endforeach;?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>





</main>
<?php
include_once("templates/footer.php");
?>
</body>

</html>