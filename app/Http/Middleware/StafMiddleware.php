<?php

namespace App\Http\Middleware;

use App\Models\Karyawan;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class StafMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();
        $role = Karyawan::where('id_users', $user)->get()->first();
        if($role == 'staff'){
            return $next($request);
        } else if($role != 'staff') {
            return redirect()->back();
        } else {
            return redirect()->route('staf.login');
        }
    }
}
