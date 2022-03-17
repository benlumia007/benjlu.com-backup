<?php 

use Illuminate\Support\Str;

return [
    'selected' => function( $page, $selection ) {
        return Str::contains( $page->getPath(), $selection ) ? 'active' : '';
    },
];