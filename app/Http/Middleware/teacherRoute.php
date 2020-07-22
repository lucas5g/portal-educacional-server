<?php

namespace App\Http\Middleware;

use App\Teacher;
use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class teacherRoute
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
        $logged = Auth::user();

        $user = Teacher::where('email', $logged->email)->first();
        if(!$user){
            return response()->json(['error', 'access denied'], 401);
        }


        return $next($request);
    }
}
