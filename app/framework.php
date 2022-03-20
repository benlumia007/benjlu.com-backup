<?php
/**
 * Framework instance
 *
 * This file is used to create a new framework instance and adds specific features to the theme.
 *
 * @package   Camaraderie
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright Copyright (C) 2014-2022. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 */

/**
 * Create a new framework instance.
 */
$app = new Blush\Core\Application( dirname( __DIR__ ) );

# ------------------------------------------------------------------------------
# Bootstrap the application.
# ------------------------------------------------------------------------------
#
# Calls the application `boot()` method, which launches the application. Pat
# yourself on the back for a job well done.

$app->boot();

# ------------------------------------------------------------------------------
# Run the application.
# ------------------------------------------------------------------------------
#
# Get the router, which handles the current request, and send the response back
# to the browser.

$app->make( 'routing.router' )->response()->send();