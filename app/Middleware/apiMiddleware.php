<?php
namespace App\Middleware;

use SME\Core\Middleware;

class apiMiddleware extends Middleware {
	
	public function handle($request, $next) {
		//dd($request);
		//return $next(123, 456);
		return $next($request);
	}
}