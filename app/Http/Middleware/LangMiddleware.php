<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Illuminate\Http\Request;

class LangMiddleware {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    protected $languages = ['en', 'ar', 'ur'];

    public function handle($request, Closure $next) {
        $lang = $request->route()->parameter('lang');
        if (in_array($lang, $this->languages)) {
//            App::setLocale($lang);
            app()->setLocale($lang);
        } else {
            app()->setLocale("en");
//            App::setLocale('en');
        }
        return $next($request);
    }

}
