<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomerLogedIn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->cookie("cusId") && (url('/Customer/Login') === url()->current()||url('/customers/RegisterCustomers') === url()->current())) {
            return redirect()->back();
        } else {
            return $next($request);
        }
    }
}
