<?php

namespace App\Http\Middleware;

use Closure;

class LogOutRequest
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
        // Without Query String
        //var_dump($request->url());

        // With Query String
        var_dump($request->fullUrl());
        return $next($request);
    }
}
