<?php

declare(strict_types=1);

// This is the file where you can keep all your functions. Remember to NOT
// execute/run any functions in this file. Keep it dumb.

/**
 * Returns Plain news by Karl-Johan Lundholm
 * @param  string The title of the site
 * @param  string By
 * @param  string Name of editor
 * @return string This function gets the footerDescription.
 */

function footerDescription(string $title, string $by, string $editorName): string
{
	return "$title $by $editorName";
}

/**
 * Returns array by using a user-supplied comparison function
 * @param  [type] $a reference to the first index of the array
 * @param  [type] $b reference to the second index of the array
 * @return int       This function sorts articles by date.
 */

function sortByDate($a, $b): int
{
	$date1 = strtotime($a['publishDate']);
	$date2 = strtotime($b['publishDate']);
	return $date2 - $date1;
}
//sorts array
usort($articles, 'sortByDate');
