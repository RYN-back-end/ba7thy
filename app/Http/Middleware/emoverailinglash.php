<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class emoverailinglash
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $url = $request->getRequestUri();

        // Remove the trailing slash if it exists
        if ($url !== '/' && Str::endsWith($url, '/')) {
            $newUrl = rtrim($url, '/');

            // Redirect to the URL without the trailing slash
            return redirect()->to($newUrl, 301);
        }

        return $next($request);
    }
}
