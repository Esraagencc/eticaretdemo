<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class anasayfakontrol
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $now = date('i');
        if($now%2==1){
            return $next($request);
        }
        else{
            echo "error";
            die();
        }
    }
}
