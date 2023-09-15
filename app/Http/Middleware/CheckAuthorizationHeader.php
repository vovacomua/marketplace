<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAuthorizationHeader
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Define the hardcoded string you want to compare with
        $expectedAuthorization = 'Bearer SDfSdfSdfW@%23$ssdf';

        // Get the Authorization header from the request
        $authorizationHeader = $request->header('Authorization');

        // Check if the Authorization header matches the expected string
        if ($authorizationHeader !== $expectedAuthorization) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $next($request);
    }
}
