<?php

namespace App\Http\Middleware;

use Closure;

class Currency
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
	    $currency = $request->session()->get('currency', 'USD');
	    currency()->setUserCurrency($currency);

        return $next($request);
    }
}
