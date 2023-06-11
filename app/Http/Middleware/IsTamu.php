<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsTamu
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            if (Auth::user()->role === 'admin') {
                return redirect('/admin')->withErrors('Kamu sudah dalam keadaan login');
            } elseif (Auth::user()->role === 'user') {
                return redirect('/user')->withErrors('Kamu sudah dalam keadaan login');
            }
        }
        return $next($request);
    }
}
