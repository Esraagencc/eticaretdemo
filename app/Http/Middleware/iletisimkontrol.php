<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class iletisimkontrol
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
        $now = date('H');
        $request->session()->put('giriszamani',$now);
        $giriszamani= $request->session()->get('giriszamani');
        if($now>"24" && $now<"12"){
            return $next($request);
        }
        else{
            echo "error ";
            die();
        }
    }
}
