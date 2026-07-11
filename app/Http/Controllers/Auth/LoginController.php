<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController extends Controller
{
    // Shows the empty login form.
    public function create(): View
    {
        return view('auth.login');
    }

    // Handles the submitted login form.
    public function store(Request $request): RedirectResponse
    {
        // 1. Validate that both fields were actually submitted.
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // 2. Auth::attempt() looks up the email in the users table and
        // compares the hashed password automatically. It returns true
        // and logs the person in if they match, or false otherwise.
        // The second argument handles the "Remember me" checkbox.
        if (! Auth::attempt($credentials, $request->boolean('remember'))) {
            return back()
                ->withErrors(['email' => 'These credentials do not match our records.'])
                ->onlyInput('email');
        }

        // 3. Regenerate the session ID for security, same reason as in
        // RegisterController — prevents session fixation attacks.
        $request->session()->regenerate();

        // 4. Role-based redirect: admins and students land on different
        // pages after logging in.
        if (Auth::user()->role === 'admin') {
            return redirect()->route('admin.home');
        }

        // 5. redirect()->intended() sends the student back to whichever
        // protected page they originally tried to visit before being
        // asked to log in. If there wasn't one (e.g. they came straight
        // from the login page), it falls back to student.mylearning.
        return redirect()->intended(route('student.mylearning'));
    }

    // Logs the current user out.
    public function destroy(Request $request): RedirectResponse
    {
        // 1. Ends the authenticated session.
        Auth::logout();

        // 2. Invalidate the old session data completely.
        $request->session()->invalidate();

        // 3. Generate a new CSRF token, since the old one belonged to a
        // session that no longer exists.
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'You have been logged out.');
    }
}