<?php
# App configuration.

return [
	// URL to the site.
	'uri' => env( 'APP_URI', 'http://localhost' ),

	// A custom title for the site.
	'title' => 'Benjamin Lu',

	// Custom description/tagline for the site.
	'tagline' => 'PHP Developer',

	// Select from a list of supported timezones:
	// https://www.php.net/manual/en/timezones.php
	'timezone' => 'America/Los_Angeles',

	// Set the homepage to show a custom content type collection. This
	// should be the content type name/type (e.g., `post`) set in the
	// `/config/content.php` configuration file.  Leave empty to show the
	// normal homepage.
	'home_alias' => '',

	// Register service providers.
	'providers' => [
		App\Config\Provider::class,
		App\Mix\Provider::class,
	],

	// Register static proxies classes.
	'proxies' => []
];