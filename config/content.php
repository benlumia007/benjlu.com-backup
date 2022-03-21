<?php
# Custom content types configuration.
#
# "{$type}" => [
#	'path'         => string, // path relative to `user/content` (no slashes)
#	'taxonomy'     => bool,   // whether content type is a taxonomy
#       'term_collect' => string  // content type for taxonomy terms to collect
# ]

use App\Controllers\SinglePost;
use App\Controllers\ArchivePost;

return [
	// Create custom content type and taxonomy for blog posts.
	'post' => [
		'path'       => '_posts',
		'collection' => [ 'order' => 'desc' ],
		'uri'        => 'archives',
		'uri_single' => 'archives/{year}/{month}/{day}/{name}',
		'routes'     => [
			'archives/{year}/{month}/{day}/{name}'      => SinglePost::class,
			'archives/{year}/{month}/{day}/page/{page}' => ArchivePost::class,
			'archives/{year}/{month}/{day}'             => ArchivePost::class,
			'archives/{year}/{month}/page/{page}'       => ArchivePost::class,
			'archives/{year}/{month}'                   => ArchivePost::class,
			'archives/{year}/page/{page}'               => ArchivePost::class,
			'archives/{year}'                           => ArchivePost::class,
		]
	],
	'tag' => [
		'path'            => 'blog/tags',
		'taxonomy'        => true,
		'term_collect'    => 'post',
		'term_collection' => [ 'order' => 'desc' ]
	],
	'portfolio' => [
		'path' => 'portfolio',
		'collection' => [ 'order' => 'desc', 'number' => 9 ]
	]
];