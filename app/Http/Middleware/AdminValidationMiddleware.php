<?php

namespace App\Http\Middleware;

use Session;
use Closure;

class AdminValidationMiddleware
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
        $userId = Session::get('userId');
        $userType = Session::get('userType');
        if ($userId!='' && $userType == 'admin') {
            return $next($request);
        }
        return redirect()->route('admin');
        
    }
}
