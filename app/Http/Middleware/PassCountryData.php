<?php

namespace App\Http\Middleware;

use App\Models\Country;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class PassCountryData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Get data from the Country model (you can modify this as per your requirement)
        $countries = Country::all();

        View::share('countries', $countries);

        // Continue to the next middleware/request handler
        return $next($request);
    }
}
