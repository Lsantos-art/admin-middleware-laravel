<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        # Verifica se o usuário está logado e se possui permissão de admin
        if (Auth::check() && Auth::user()->role == "admin") {
            return $next($request);
        }

        # Se for um usuario comum, retorna para a rota anterior
        return redirect()
                 ->back()->with('error', 'Que feio servidor, você não pode fazer isso!');
    }
}
