<?php

namespace App\Http\Middleware;

use App\Models\EmployeeModel;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $id = request()->cookie("id");
        // dd($id);
        if (!$id) {
            return redirect("/login");
        } 
            $emp = EmployeeModel::FindOrFail($id);

            if ($emp->role_id === 1) {
                return $next($request);
            } else {
                return redirect()->back();
            }
        
    }
}
