<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAdminRole
{
    public function handle(Request $request, Closure $next,...$roles)
    {
        $user = Auth::user();
        // Check if the user is authenticated and has the 'admin' role
        if ($user && in_array($user->role, $roles)) {
            return $next($request);
        }
        // If not, redirect or handle unauthorized access as per your requirements
        return redirect('/')->with('error', 'Unauthorized access.');

        // Alternatively, you can return a response with a 403 status code:
        // return response('Unauthorized access.', 403);
    }
}
