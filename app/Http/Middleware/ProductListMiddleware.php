<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class ProductListMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
		if (Auth::check()) {
				if ($request->user()->cannot('product_list')) {
						return redirect('/unauthorized');
				} 		
		} else {
				return redirect('/login');
		}	
        return $next($request);
    }
}
