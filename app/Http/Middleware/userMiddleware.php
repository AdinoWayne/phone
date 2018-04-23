<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class userMiddleware
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

    	$user =Auth::user();
    	if ($user->role =='admin') {
    		return $next($request);
    	}else{
    		return redirect('admin/blank')->with('Thongbao','Dont Access');
    	}
    }
}
