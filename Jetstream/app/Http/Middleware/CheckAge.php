<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
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
        //Creando condicionale para acceder a la para ver si es mayor de edad o no
        if(auth()->user()->email == 'ejemplo1@gmail.com'){
            return $next($request);

        }else {
            return redirect('no_autorizado');
        }
    }
}
