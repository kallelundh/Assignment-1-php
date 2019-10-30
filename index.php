<?php require __DIR__ . '/header.php';


usort($articles, "sortByDate"); //sorting articles by date
?>

<?php foreach ($articles as $article) : ?>
	<?php $contentImage = $article['contentImg']; ?>
	<div class="imagebox"><img class="contentimg" src="<?= $contentImage; ?> " alt="kalle"></div> <!-- Printing out image -->
	<br>
	<div class="maincontainer">
		<div class="box title">
			<h2><?= $article['title'] ?></h2>
		</div> <!-- Title -->
		<br>
		<div class="box"><?= ($article['content']) ?></div> <!-- Article -->
		<br>
		<div class="box"><?= $authors[$article['authorId']]['fullName'] ?></div> <!-- Author -->
		<br>
		<div class="box"><?= $article['publishDate'] ?></div> <!-- PublishDate -->
		<br>
		<div class="box">Likes: <?= $article['likeCounter'] ?></div> <!-- Likes -->
		<br>
		<br>
	</div> <!-- Main Div -->
<?php endforeach ?>


<?php
require __DIR__ . '/footer.php';
?>
