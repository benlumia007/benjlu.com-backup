<?php 

return [
    'build' => [
        // path to your content, blades, assets, etc.
        'source' => 'public',
    ],

    // a custom title for the site.
    'siteTitle' => 'Benjamin Lu',

    // a custom tagline for the site.
    'siteTagline' => 'PHP Developer',

    // a custom primary menu for the site.
    'primaryMenu' => [
        [
            'link' => '/portfolio',
            'title' => 'Portfolio'
        ],
    ],

    // add custom collections.
    'collections' => [
        'portfolios' => [
            'path' => 'portfolio/{-title}',
            'sort' => '-date',
        ],
    ],
];