<?php

namespace App\Http\Middleware;

use Closure;

class ApiAuth
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
        // TODO: Move API keys to DB and add Token & time validation
        // Api-key - JWT Token (expire)
        // Request Token with X-API-KEY than make Requests with the Token
        if ($request->header('X-API-KEY') != env('API_KEY')) {
            return response('Unauthorized.', 401);
        }
        return $next($request);
    }
}
