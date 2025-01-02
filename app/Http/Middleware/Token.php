<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Token
{
    public function handle(Request $request, Closure $next)
    {
        if(!Auth::user()->level == 'token'){
            return redirect()->back();
        }
        return $next($request);
    }
}
