<?php

namespace App\Config;
use Blush\Core\ServiceProvider;
use Nette\Schema\Expect;

class Provider extends ServiceProvider {
    public function register(): void {
		// Add simple schema for just an array of anything.
		$this->app->make( 'config' )->addSchema(
			'custom',
			Expect::array()->default( [
				'primary' => Expect::array()->default( [] ),
			] )
		);

		// Load user-supplied data.
		$this->app->get( 'config' )->set(
			'custom',
			include "{$this->app->path}/config/custom.php"
		);
	}
}