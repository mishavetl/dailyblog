<?php

namespace DailyBlog\Http\Middleware;

use Closure;

class BackMiddleware
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
        if ($request->user()->is_admin()) {
            return redirect('/');
        }
        
        return $next($request);
    }
}
