<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserIsAdmin
{
    /**
     * This method runs before the request is allowed to reach the
     * Controller. $next is a function that represents "continue on
     * to the next step" — calling it passes the request along.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // At this point, the 'auth' middleware has already run and
        // confirmed someone is logged in — so $request->user() is
        // guaranteed to return a real User, not null.
        //
        // We reuse the isAdmin() helper from the User model instead of
        // checking the role column directly here, so the definition of
        // "what makes someone an admin" lives in exactly one place.
        if (! $request->user()->isAdmin()) {
            // 403 means "Forbidden" — the person is logged in, but
            // isn't allowed to see this specific page.
            abort(403, 'You do not have access to this page.');
        }

        // If we reach this line, the user IS an admin, so we let the
        // request continue on to the Controller/view.
        return $next($request);
    }
}