<?php
/**
 * 
 * @package   benjlu.com
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright Copyright (C) 2017-2022. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 */

/**
 * Let's run the composer autoloader.
 * 
 * Automatically loads the composer autoloader, but let's check
 * if it exists first, then load.
 */
if ( file_exists( 'vendor/autoload.php' ) ) {
    require_once( 'vendor/autoload.php' );
}