<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Console\View\Components\Alert as ComponentsAlert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\HttpFoundation\Response;

class AdminCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
    
        // dd($user->type);
        if(Auth::user() && Auth::user()->type=="admin")
        {
            return $next($request);
        }
        Alert::success('please login');
       return redirect('admin/login');
         }

    }

