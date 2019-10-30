<?php

declare(strict_types=1);

$authors = [
	[
		'fullName' => 'Author: Tim Roth'
	],
	[
		'fullName' => 'Author: Amanda Plummer'
	],
	[
		'fullName' => 'Author: John Travolta'
	],
	[
		'fullName' => 'Author: Samuel L. Jackson'
	],
	[
		'fullName' => 'Author: Bruce Willis'
	]
];

$articles = [
	[
		'title' => 'Diner',
		'authorId' => 0,
		'content' => file_get_contents(__DIR__ . '/Articles/text1.txt'),
		'publishDate' => '2018-08-02',
		'likeCounter' => 1,
		'contentImg' => 'https://i.ytimg.com/vi/VnLJwYjw7bo/maxresdefault.jpg'
	],
	[
		'title' => 'Scream at the diner',
		'authorId' => 1,
		'content' => file_get_contents(__DIR__ . '/Articles/text2.txt'),
		'publishDate' => '2018-01-02',
		'likeCounter' => 2,
		'contentImg' => 'https://cdn2.lamag.com/wp-content/uploads/sites/9/2016/11/hawthrone2-1.jpg'
	],
	[
		'title' => 'Dance',
		'authorId' => 2,
		'content' => file_get_contents(__DIR__ . '/Articles/text3.txt'),
		'publishDate' => '2018-02-03',
		'likeCounter' => 3,
		'contentImg' => 'https://timeentertainment.files.wordpress.com/2011/08/03_top10moviedancescenes.jpg?w=720&h=480&crop=1'
	],
	[
		'title' => 'Tasty burger',
		'authorId' => 3,
		'content' => file_get_contents(__DIR__ . '/Articles/text4.txt'),
		'publishDate' => '2018-03-04',
		'likeCounter' => 4,
		'contentImg' => 'https://brobible.files.wordpress.com/2017/01/pulp_fiction-samuel_l_jackson-burger.jpg?quality=90&w=650&h=405'
	],
	[
		'title' => 'Boxing match',
		'authorId' => 4,
		'content' => file_get_contents(__DIR__ . '/Articles/text5.txt'),
		'publishDate' => '2018-01-05',
		'likeCounter' => 5,
		'contentImg' => 'https://www.rollingstone.com/wp-content/uploads/2018/06/rs-18852-pulp-1800-1400684739.jpg?resize=900,600&w=450'
	],
	[
		'title' => 'Le big maq',
		'authorId' => 0,
		'content' => file_get_contents(__DIR__ . '/Articles/text6.txt'),
		'publishDate' => '2018-12-06',
		'likeCounter' => 1,
		'contentImg' => 'https://i.ytimg.com/vi/PxXhjFvNNGc/maxresdefault.jpg'
	],
	[
		'title' => 'The Hateful Eight',
		'authorId' => 1,
		'content' => file_get_contents(__DIR__ . '/Articles/text7.txt'),
		'publishDate' => '2018-10-07',
		'likeCounter' => 7,
		'contentImg' => 'https://www.svtstatic.se/image-cms/svtse/1452776627/play/gomorron-sverige/article5868722.svt/alternates/extralarge/the-hateful-eight-jpg'
	],
	[
		'title' => 'Pulp',
		'authorId' => 2,
		'content' => file_get_contents(__DIR__ . '/Articles/text8.txt'),
		'publishDate' => '2018-07-08',
		'likeCounter' => 8,
		'contentImg' => 'https://www.indiewire.com/wp-content/uploads/2019/07/Screen-Shot-2019-07-22-at-5.09.08-PM.png?w=780'
	],
	[
		'title' => '"I believe your future is in your tomorrows"',
		'authorId' => 3,
		'content' => file_get_contents(__DIR__ . '/Articles/text9.txt'),
		'publishDate' => '2018-09-09',
		'likeCounter' => 9,
		'contentImg' => 'https://pmcvariety.files.wordpress.com/2018/05/john-travolta-as-john-gotti.jpg?w=1000'
	],
	[
		'title' => 'My page',
		'authorId' => 4,
		'content' => file_get_contents(__DIR__ . '/Articles/text10.txt'),
		'publishDate' => '2019-10-28',
		'likeCounter' => 10,
		'contentImg' => 'Authors/karljohan.jpeg'
	],
];
