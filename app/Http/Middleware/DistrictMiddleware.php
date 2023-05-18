<?php

namespace App\Http\Middleware;

use App\Models\District;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DistrictMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (count(District::all()) >= 6) {

            return response("Районы были уже были созданы раннее");
        }

        return $next($request);
    }
}
