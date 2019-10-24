<?php
declare(strict_types=1);
// This is the file where you can keep your data arrays such as articles and
// authors.

$authors = [
	[
		'id' => 1,
		'fullName' => 'Sven Bertil',
		'imgUrl' => 'authors/stickman1.jpeg'
	],
	[
		'id' => 2,
		'fullName' => 'Evert Tub',
		'imgUrl' => 'authors/stickman1.jpeg'
	],
	[
		'id' => 3,
		'fullName' => 'Emil Lönnebärsh',
		'imgUrl' => 'authors/stickman1.jpeg'
	],
	[
		'id' => 4,
		'fullName' => 'Chesus Christus',
		'imgUrl' => 'authors/stickman1.jpeg'
	],
	[
		'id' => 5,
		'fullName' => 'Donald Hump',
		'imgUrl' => 'authors/stickman1.jpeg'
	]
	];

$news = [
	[
		'title' => 'Sven plays guitarr',
		'author' => 'Sven Bertil',
		'content' => file_get_contents(__DIR__.'/Articles/text1.txt'),
		'publishDate' => '2019-01-01',
		'likeCounter' => 1,
		'contentImg' => ''
	],
	[
		'title' => 'Evert plays drums',
		'author' => 'Evert Tub',
		'content' => file_get_contents(__DIR__.'/Articles/text2.txt'),
		'publishDate' => '2019-01-02',
		'likeCounter' => 2,
		'contentImg' => ''
	],
	[
		'title' => 'Emil snorts',
		'author' => 'Emil Lönnebärsh',
		'content' => file_get_contents(__DIR__.'/Articles/text3.txt'),
		'publishDate' => '2019-01-03',
		'likeCounter' => 3,
		'contentImg' => ''
	],
	[
		'title' => 'Chesus begs',
		'author' => 'Chesus Christus',
		'content' => file_get_contents(__DIR__.'/Articles/text4.txt'),
		'publishDate' => '2019-01-04',
		'likeCounter' => 4,
		'contentImg' => ''
	],
	[
		'title' => 'Donald hates',
		'author' => 'Donald Hump',
		'content' => file_get_contents(__DIR__.'/Articles/text5.txt'),
		'publishDate' => '2019-01-05',
		'likeCounter' => 5,
		'contentImg' => ''
	],
	[
		'title' => 'Sven stops playing',
		'author' => 'Sven Bertil',
		'content' => file_get_contents(__DIR__.'/Articles/text6.txt'),
		'publishDate' => '2019-01-06',
		'likeCounter' => 6,
		'contentImg' => ''
	],
	[
		'title' => 'Evert likes Sven',
		'author' => 'Evert Tub',
		'content' => file_get_contents(__DIR__.'/Articles/text7.txt'),
		'publishDate' => '2019-01-07',
		'likeCounter' => 7,
		'contentImg' => ''
	],
	[
		'title' => 'Emil goes to rehab',
		'author' => 'Emil Lönnebärsh',
		'content' => file_get_contents(__DIR__.'/Articles/text8.txt'),
		'publishDate' => '2019-01-08',
		'likeCounter' => 8,
		'contentImg' => ''
	],
	[
		'title' => 'Chesus sleeps',
		'author' => 'Chesus Christus',
		'content' => file_get_contents(__DIR__.'/Articles/text9.txt'),
		'publishDate' => '2019-01-09',
		'likeCounter' => 9,
		'contentImg' => ''
	],
	[
		'title' => 'Donald loves',
		'author' => 'Donald Hump',
		'content' => file_get_contents(__DIR__.'/Articles/text10.txt'),
		'publishDate' => '2019-01-10',
		'likeCounter' => 10,
		'contentImg' => ''
	],
	];
