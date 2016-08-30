<?php

namespace App\Http\Middleware;
use session;
use Closure;

class UserValidationMiddleware
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
        session::get
        return $next($request);
    }
}
