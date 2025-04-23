<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ExampleMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Definir la estrategia de la política
        if ($request->user()->role == 'admin') {
            return redirect('admin/dashboard');
        }

        return $next($request);
    }
}
