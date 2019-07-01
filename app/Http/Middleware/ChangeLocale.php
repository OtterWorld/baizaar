<?php

namespace App\Http\Middleware;

use Closure;
use App\Locale\Locale;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;

class ChangeLocale
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
        // If Language has been set
        if(!empty(Cookie::get('lang'))) {
            Locale::setLocale(Cookie::get('lang'));
            App::setLocale(Cookie::get('lang'));
        }

        if($request->has('lang')) {
            Locale::setLocale($request->lang);
            App::setLocale($request->lang);
            Cookie::queue('lang', $request->lang, 10080);
        }
        return $next($request);
    }
}
