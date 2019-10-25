
<?php
// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.
?>
<?php
require __DIR__.'/data.php';
require __DIR__.'/functions.php';
require __DIR__.'/header.php';
?>

<?php usort($articles, "sortByDate"); ?>

<?php foreach ($articles as $article): ?>
    <section>
      <img class="myself" src="<?= $article['contentImg']?>" alt="kalle"> <!-- Picture -->
      <br>
      <h1 class="title"><?= $article['title']?></h1> <!-- Title -->
      <br>
      <p class="content"><?= nl2br($article['content']) ?></p> <!-- Article -->
      <br>
      <p class="author"><?php echo $authors[$article['authorId']]['fullName'] ?></p>
      <br>
      <h3 class="title"><?= $article['publishDate']?></h3> <!-- PublishDate -->
      <br>
      <h4 class="likes">Likes:<?= $article['likeCounter']?></h4> <!-- Likes -->
      <br>
      <br>
    </section> <!-- Section -->
<?php endforeach ?>


<?php
  require __DIR__.'/footer.php';
?>
