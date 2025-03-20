<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class CheckPasswordChange extends Middleware
{


    public function handle(Request $request, Closure $next)
    {
        if(admin()->check() && admin()->user()->password_changed_at != session('password_changed_at')){
            admin()->logout();
            session()->flash('message', 'تم تحديث كلمة المرور يرجي تسجيل الدخول مجددا');
        }
        else{
            return $next($request);
        }
    }
}
