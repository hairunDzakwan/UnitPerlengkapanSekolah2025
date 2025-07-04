<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // Cek apakah user sudah login dan memiliki role "admin"
        if (Auth::check() && Auth::User()->role === 'admin') {
            return $next($request);
        }

        // Jika bukan admin, kembalikan respons error
        return response()->json(['message' => 'Akses ditolak. Anda bukan admin.'], 403);
    }
}
