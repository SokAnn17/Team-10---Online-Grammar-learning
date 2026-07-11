<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class RegisterController extends Controller
{
    // Shows the empty registration form.
    public function create(): View
    {
        return view('auth.register');
    }

    // Handles the submitted registration form.
    public function store(Request $request): RedirectResponse
    {
        // 1. Validate the input. If any rule fails, Laravel automatically
        // redirects back with error messages — the code below only runs
        // on success.
        //
        // Note: registration only collects the fields required to create
        // an account (full_name, email, password). The other columns on
        // the users table — phone_number, date_of_birth, country,
        // learning_goal, about_me, profile_image — stay empty for now and
        // will be filled in later on the Edit Profile page.
        $validated = $request->validate([
            'full_name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:100', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        // 2. Create the user. Public registration is always a student —
        // admin accounts are never created through this public form.
        $user = User::create([
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'password' => $validated['password'],
            'role' => 'student',
        ]);

        // 3. Log the new user in immediately, so they don't have to
        // manually sign in right after registering.
        Auth::login($user);

        // 4. Regenerate the session ID. This protects against session
        // fixation attacks — a new, safe session ID is issued now that
        // the user's identity has changed from guest to logged-in.
        $request->session()->regenerate();

        // 5. Send them to their student home page using a named route
        // (defined later in routes/web.php) instead of a hard-coded URL.
        return redirect()->route('student.mylearning')
            ->with('success', 'Welcome! Your account has been created.');
    }
}