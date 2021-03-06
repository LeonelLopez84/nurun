<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Illuminate\Support\Facades\Auth;

class ValidateFirstUserSignUp
{
    /**
     * Handle an incoming request.
     * Validacion del Primer usuario
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $usersCount = User::count();
        if($usersCount > 0 && !Auth::check()){
            return redirect("/login");
        }

        return $next($request);
    }
}
