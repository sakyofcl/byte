<?php

namespace App\Http\Middleware;

use Closure;

class Checkout
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
        
        
        if(!session()->get('cart')){
            return redirect('/product');
        }
        else{
            return $next($request);
        }
       
        
    }
}
