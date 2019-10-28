<?php

declare(strict_types=1);

// This is the file where you can keep your data arrays such as articles and
// authors.

$authors = [
	[
		'fullName' => 'Tim Roth'
	],
	[
		'fullName' => 'Amanda Plummer'
	],
	[
		'fullName' => 'John Travolta'
	],
	[
		'fullName' => 'Samuel L. Jackson'
	],
	[
		'fullName' => 'Bruce Willis'
	]
];

$articles = [
	[
		'title' => 'Diner',
		'authorId' => 0,
		'content' => file_get_contents(__DIR__ . '/Articles/text1.txt'),
		'publishDate' => '2019-08-02',
		'likeCounter' => 1,
		'contentImg' => 'Authors/karljohan.jpeg'
	],
	[
		'title' => 'Scream at the diner',
		'authorId' => 1,
		'content' => file_get_contents(__DIR__ . '/Articles/text2.txt'),
		'publishDate' => '2019-01-02',
		'likeCounter' => 2,
		'contentImg' => 'Authors/karljohan.jpeg'
	],
	[
		'title' => 'Dance',
		'authorId' => 2,
		'content' => file_get_contents(__DIR__ . '/Articles/text3.txt'),
		'publishDate' => '2019-02-03',
		'likeCounter' => 3,
		'contentImg' => 'Authors/karljohan.jpeg'
	],
	[
		'title' => 'Tasty burger',
		'authorId' => 3,
		'content' => file_get_contents(__DIR__ . '/Articles/text4.txt'),
		'publishDate' => '2019-03-04',
		'likeCounter' => 4,
		'contentImg' => 'Authors/karljohan.jpeg'
	],
	[
		'title' => 'Boxing match',
		'authorId' => 4,
		'content' => file_get_contents(__DIR__ . '/Articles/text5.txt'),
		'publishDate' => '2019-01-05',
		'likeCounter' => 5,
		'contentImg' => 'Authors/karljohan.jpeg'
	],
	[
		'title' => 'Le big maq',
		'authorId' => 0,
		'content' => file_get_contents(__DIR__ . '/Articles/text6.txt'),
		'publishDate' => '2019-12-06',
		'likeCounter' => 1,
		'contentImg' => 'Authors/karljohan.jpeg'
	],
	[
		'title' => 'The Hateful Eight',
		'authorId' => 1,
		'content' => file_get_contents(__DIR__ . '/Articles/text7.txt'),
		'publishDate' => '2019-10-07',
		'likeCounter' => 7,
		'contentImg' => 'Authors/karljohan.jpeg'
	],
	[
		'title' => 'Pulp',
		'authorId' => 2,
		'content' => file_get_contents(__DIR__ . '/Articles/text8.txt'),
		'publishDate' => '2019-07-08',
		'likeCounter' => 8,
		'contentImg' => 'Authors/karljohan.jpeg'
	],
	[
		'title' => 'I believe your future is in your tomorrows',
		'authorId' => 3,
		'content' => file_get_contents(__DIR__ . '/Articles/text9.txt'),
		'publishDate' => '2019-09-09',
		'likeCounter' => 9,
		'contentImg' => 'Authors/karljohan.jpeg'
	],
	[
		'title' => 'Yippee-ki-yay',
		'authorId' => 4,
		'content' => file_get_contents(__DIR__ . '/Articles/text10.txt'),
		'publishDate' => '2019-12-12',
		'likeCounter' => 10,
		'contentImg' => 'Authors/karljohan.jpeg'
	],
];
