<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserRole
{
    public function handle($request, Closure $next, ...$roles)
    {
        if ($request->user() === null) {
            return redirect('/login');
        }

        foreach ($roles as $role) {
            if ($request->user()->usertype === $role) {
                return $next($request);
            }
        }

        return redirect('/no-access');
    }
}