<?php

declare(strict_types=1);

/**
 * 02: Get footer description.
 * @param string $title
 * @param string $by
 * @param string $editorName
 *
 * @return string
 */
$title = 'Plain News';
$editorName = 'Karl-Johan Lundholm';
$getFooterDesc = footerDescription($title, 'by', $editorName);
?>

<footer>
	<small>&copy; <?php echo date('Y M'); ?> <br> <?php echo $getFooterDesc ?></small>
</footer>
<script src="app.js"></script>
</body>

</html>
