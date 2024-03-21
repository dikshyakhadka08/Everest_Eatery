<?php
//
//namespace App\Http\Middleware;
//
//use Closure;
//use Illuminate\Http\Request;
//use Symfony\Component\HttpFoundation\Response;
//
//class AllAdminMiddleware
//{
//    /**
//     * Handle an incoming request.
//     *
//     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
//     */
//    public function handle(Request $request, Closure $next): Response
//    {if (auth()->user()->usertype=='2' || auth()->user()->usertype=='1'){
//        return $next($request);
//    }
//  // Redirect or throw an unauthorized error if the user is not an admin
//
//  return abort(403, 'Unauthorized access');
//}
//      
//    
//} 


namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AllAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is authenticated
        if (auth()->check() && (auth()->user()->usertype == '2' || auth()->user()->usertype == '1')) {
            return $next($request);
        }

        // Redirect or throw an unauthorized error if the user is not an admin
        return abort(403, 'Unauthorized access');
    }
}
