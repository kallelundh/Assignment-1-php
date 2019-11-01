<?php

declare(strict_types=1);
require __DIR__ . '/header.php';

usort($articles, "sortByDate"); //sorting articles by date
?>

<?php foreach ($articles as $article) : ?>
	<?php $contentImage = $article['contentImg']; ?>
	<div class="imagebox"><img class="contentimg" src="<?= $contentImage; ?> " alt="pic"></div> <!-- Printing out image -->
	<br>
	<div class="maincontainer">
		<div class="box title">
			<h1><?= $article['title'] ?></h1>
		</div> <!-- Title -->
		<br>
		<div class="box"><?= ($article['content']) ?></div> <!-- Article -->
		<br>
		<h2 class="box"><?= $authors[$article['authorId']]['fullName'] ?></h2> <!-- Author -->
		<br>
		<h3 class="box"><?= $article['publishDate'] ?></h3> <!-- PublishDate -->
		<br>
		<div class="box">Likes: <?= $article['likeCounter'] ?></div> <!-- Likes -->
		<br>
		<br>
	</div> <!-- Main Div -->
<?php endforeach ?>

<?php

require __DIR__ . '/footer.php';

?>
