<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class surekontrol
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
        $giriszamani = $request->session()->get('giriszamani');
        if($giriszamani%2==0){
            return $next($request);
        }
        else{
            echo "errror ";
            die();
        }
    }
}
