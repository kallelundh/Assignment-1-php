<?php
declare(strict_types=1);
// This is the file where you can keep your data arrays such as articles and
// authors.

$authors = [
	[
		'fullName' => 'Sven Bertil'
	],
	[
		'fullName' => 'Evert Tub'
	],
	[
		'fullName' => 'Emil Lönnebärsh'
	],
	[
		'fullName' => 'Chesus Christus'
	],
	[
		'fullName' => 'Donald Hump'
	]
	];

$articles = [
	[
		'title' => 'Sven plays guitarr',
		'authorId' => 0,
		'content' => file_get_contents(__DIR__.'/Articles/text1.txt'),
		'publishDate' => '2019-08-02',
		'likeCounter' => 1,
		'contentImg' => 'Authors/karljohan.jpeg'
	],
	[
		'title' => 'Evert plays drums',
		'authorId' => 1,
		'content' => file_get_contents(__DIR__.'/Articles/text2.txt'),
		'publishDate' => '2019-01-02',
		'likeCounter' => 2,
		'contentImg' => ''
	],
	[
		'title' => 'Emil snorts',
		'authorId' => 2,
		'content' => file_get_contents(__DIR__.'/Articles/text3.txt'),
		'publishDate' => '2019-02-03',
		'likeCounter' => 3,
		'contentImg' => ''
	],
	[
		'title' => 'Chesus begs',
		'authorId' => 3,
		'content' => file_get_contents(__DIR__.'/Articles/text4.txt'),
		'publishDate' => '2019-03-04',
		'likeCounter' => 4,
		'contentImg' => ''
	],
	[
		'title' => 'Donald hates',
		'authorId' => 4,
		'content' => file_get_contents(__DIR__.'/Articles/text5.txt'),
		'publishDate' => '2019-01-05',
		'likeCounter' => 5,
		'contentImg' => ''
	],
	[
		'title' => 'Sven stops playing',
		'authorId' => 0,
		'content' => file_get_contents(__DIR__.'/Articles/text6.txt'),
		'publishDate' => '2019-12-06',
		'likeCounter' => 1,
		'contentImg' => ''
	],
	[
		'title' => 'Evert likes Sven',
		'authorId' => 1,
		'content' => file_get_contents(__DIR__.'/Articles/text7.txt'),
		'publishDate' => '2019-10-07',
		'likeCounter' => 7,
		'contentImg' => ''
	],
	[
		'title' => 'Emil goes to rehab',
		'authorId' => 2,
		'content' => file_get_contents(__DIR__.'/Articles/text8.txt'),
		'publishDate' => '2019-07-08',
		'likeCounter' => 8,
		'contentImg' => ''
	],
	[
		'title' => 'Chesus sleeps',
		'authorId' => 3,
		'content' => file_get_contents(__DIR__.'/Articles/text9.txt'),
		'publishDate' => '2019-09-09',
		'likeCounter' => 9,
		'contentImg' => ''
	],
	[
		'title' => 'Donald loves',
		'authorId' => 4,
		'content' => file_get_contents(__DIR__.'/Articles/text10.txt'),
		'publishDate' => '2019-12-12',
		'likeCounter' => 10,
		'contentImg' => ''
	],
	];
