<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\AccessLog;
use Symfony\Component\HttpFoundation\Response;

class AccessLoginMidd
{
    public function handle(Request $request, Closure $next): Response
    {
         session_start();
         if (!empty($_SESSION)) {
            return $next($request);
         }
         else {
            return redirect()->route('site.login', ['error' => 2 ]);
        }
    }
}
