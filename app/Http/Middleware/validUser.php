<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class validUser
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
        echo "<br>valied user <br>";
        if (Auth::check()) {
            return $next($request);
        } else {
            return redirect()->route('auth')->with('msg', "Plese check your input info");
        }
    }

    // Authention ok then call the function
    public function  terminate(Request $request, $response): void
    {
        echo "<br>authention shesh hole call termiate<br>";
    }
}
