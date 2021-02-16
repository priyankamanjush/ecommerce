<?php

namespace App\Http\Middleware;
use session;
use Closure;
use Illuminate\Http\Request;

class UserAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
         if($request->path()=="login" ){
            session()->has('user');
            return redirect('/');
          //dd(session()->all());
         }
        return $next($request);
    }
}
