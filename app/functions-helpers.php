<?php 
if ( ! function_exists( 'mix' ) ) {
    function mix( $path ) {
        
        // Get the Laravel Mix manifest.
        $manifest = \Blush\App::resolve( 'mix' );
    
        // Make sure to trim any slashes from the front of the path.
        $path = '/' . ltrim( $path, '/' );
    
        if ( $manifest && isset( $manifest[ $path ] ) ) {
            $path = $manifest[ $path ];
        }
    
        return public_uri( $path );
    }
}