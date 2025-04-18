<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
Use Illuminate\Support\Facades\Auth;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response 
    { 
        if(!Auth::check()){ 
            return redirect('/login')->with('error', 'Anda harus 
            login terlebih dahulu!'); 
        }
        if(Auth::user()->role !== $role){             
            return  Response('Tidak dapat mengakses halaman ini.');         
        }         
        return $next($request);     }  

    
}