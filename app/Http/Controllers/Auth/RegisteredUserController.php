<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserUpdateRequest;
use App\Mail\DemoMail;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;
use Inertia\Inertia;
use Inertia\Response;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): Response
    {
        return Inertia::render('Auth/Register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'username' => 'required|string|max:255|unique:'.User::class,
            'email' => 'required|string|email|max:255|unique:'.User::class,
            'password' => ['required', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('main');
    }
    /**
     * Handle an incoming registration request.
     *
     * @throws ValidationException
     */
    public function update(UserUpdateRequest $request) : \Illuminate\Http\JsonResponse
    {
        $validated = $request->validated();

        User::find(Auth::user()->id)->update($validated);

        return response()->json();
    }

}
