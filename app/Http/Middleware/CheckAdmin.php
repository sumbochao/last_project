<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Session::has('ma_admin'))
        {
            return $next($request);
        }
        else
        {
            return redirect()->route('admin_sign_in')->with('error','Bạn chưa đăng nhập tài khoản admin');
        }
    }
}
