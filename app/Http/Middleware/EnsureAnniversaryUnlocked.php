<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureAnniversaryUnlocked
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->session()->get('anniversary_unlocked')) {
            return redirect()->route('password');
        }

        return $next($request);
    }
}
