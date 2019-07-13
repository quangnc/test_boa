<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Language;
use App;

class Setting
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

    	// Get setting language from session
	    $languageId = $request->session()->get('language', 1);

	    // Create config realtime
	    config(['app.language' => $languageId]);

	    // Get info language in database
	    $language = Language::find($languageId);

	    // Set laravel locale
	    if ($language) {
		    App::setLocale($language->code);
	    }

        return $next($request);
    }
}
