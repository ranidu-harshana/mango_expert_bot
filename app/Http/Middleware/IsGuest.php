<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsGuest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->session()->exists('verfied_user_id')) {
            return redirect()->route('user.index');
        }elseif($request->session()->exists('verfied_admin_id')) {
            return redirect()->route('user.admin');
        }
        return $next($request);
    }
}
