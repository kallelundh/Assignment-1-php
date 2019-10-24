
<?php
// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.
?>
 <?php require __DIR__.'/data.php'; ?>
<?php
  require __DIR__.'/header.php';
?>

<?php foreach ($news as $article): ?>
    <section>
      <div class="title"><?= $article['title']?></div> <!-- Title -->
      <br>
      <div class="content"><?= nl2br($article['content']) ?></div> <!-- Article -->
      <br>
      <div class="publisher"><?= $article['author']?></div>
      <br>
      <div class="title"><?= $article['publishDate']?></div> <!-- PublishDate -->
      <br>
      <div class="likes">Likes: <?= $article['likeCounter']?></div> <!-- Likes -->
      <br>
      <br>
    </section> <!-- Section -->
<?php endforeach ?>

<?php
  require __DIR__.'/footer.php';
?>
