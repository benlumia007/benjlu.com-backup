<?php
namespace App\Controllers;

use Blush\{App, Query};
use Blush\Controllers\Controller;
use Blush\Template\Tags\DocumentTitle;
use Blush\Tools\Str;
use Symfony\Component\HttpFoundation\{Request, Response};

class SinglePost extends Controller
{
	public function __invoke( array $params = [], Request $request ): Response
	{
		$types = App::resolve( 'content.types' );

		$name = $params['name'];
		$type = $types->get( 'post' );

		// Look for an `path/{$name}.md` file.
		$single = Query::make( [
			'path'  => $type->path(),
			'slug'  => $name,
			'year'  => $params['year'],
			'month' => $params['month'],
			'day'   => $params['day']
		] )->single();

		if ( $single ) {
			$doctitle = new DocumentTitle( $single->title() );

			return $this->response(
				$this->view( [
					"single-post-{$name}",
					'single-post',
					'single'
				], [
					'doctitle'   => $doctitle,
					'pagination' => false,
					'single'     => $single,
					'collection' => false
				] )
			);
		}

		// If all else fails, return a 404.
		return $this->forward404( $params, $request );
	}
}