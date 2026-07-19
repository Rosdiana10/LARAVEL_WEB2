<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AgeMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        if (Auth::user()->usia < 18) {
            return redirect('/home')->with('error', 'Halaman ini hanya dapat diakses oleh pengguna berusia 18 tahun ke atas.');
        }

        return $next($request);
    }
}