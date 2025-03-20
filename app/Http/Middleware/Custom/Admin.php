<?php

namespace App\Http\Middleware\Custom;

use App\Models\Contact;
use App\Models\Order;
use App\Models\Subscription;
use Closure;
use Illuminate\Http\Request;

class Admin
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
        if (admin()->check()){
            if(admin()->user()->password_changed_at != session('password_changed_at')) {
                admin()->logout();
                session()->flash('message', 'تم تحديث كلمة المرور يرجي تسجيل الدخول مجددا');
                return redirect()->route('admin.login');
            }
            return $next($request);
        }
        return redirect()->route('admin.login');
    }
}
