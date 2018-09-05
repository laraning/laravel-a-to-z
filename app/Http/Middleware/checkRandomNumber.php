<?php

namespace App\Http\Middleware;

use Closure;

class checkRandomNumber
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
        $number = rand(1, 100);

        if ($number < $range) {
            throw new \Exception('Error, number less than ' . $range);
        }

        return $next($request);
    }
}
