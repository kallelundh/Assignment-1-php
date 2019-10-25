<?php
declare(strict_types=1);
// This is the file where you can keep all your functions. Remember to NOT
// execute/run any functions in this file. Keep it dumb.

/**
 * This little function gets the footerDescription.
 * @param  string $title      [description]
 * @param  string $by         [description]
 * @param  string $editorName [description]
 * @return string             [description]
 */

function footerDescription(string $title, string $by, string $editorName) : string {
    return "$title $by $editorName";
}

/**
 * This function sorts articles by latest date.
 * @param  [type] $a [description]
 * @param  [type] $b [description]
 * @return int       [description]
 */

function sortByDate($a, $b) : int {
  $date1 = strtotime($a['publishDate']);
  $date2 = strtotime($b['publishDate']);
  return $date2 - $date1;
}
//sorts array
usort($articles, 'sortByDate');
?>
