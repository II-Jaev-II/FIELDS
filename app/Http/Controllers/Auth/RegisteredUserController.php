<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Province;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {

        $provinceValues = Province::all();

        return view('auth.register', [
            'provinceValues' => $provinceValues
        ]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'userType' => ['required', 'string', 'max:255'],
            'province' => ['required'],
            'municipality' => ['required'],
            'district' => ['required'],
            'barangay' => ['required'],
            'birthDate' => ['required'],
            'phoneNumber' => ['required', 'max:12'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'userType' => $request->userType,
            'province' => $request->province,
            'municipality' => $request->municipality,
            'district' => $request->district,
            'barangay' => $request->barangay,
            'birthDate' => $request->birthDate,
            'phoneNumber' => $request->phoneNumber,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        return redirect()->back()->with('success', 'Account has been created succesfully!');
    }
}
