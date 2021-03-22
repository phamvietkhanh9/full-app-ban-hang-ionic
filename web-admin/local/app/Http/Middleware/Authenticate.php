<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Authenticate
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
        if (! Auth::check()) {
           return redirect(env('user').'/login')->with('error','Vui lòng đăng nhập để truy cập trang này');
       }
        
        return $next($request);
    }
}
