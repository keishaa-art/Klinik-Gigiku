<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Mail\EmailVerificationOtp;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Illuminate\Auth\Events\Registered;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.login-register');
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
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role' => ['required', 'string', 'in:Pasien'],
            'alamat' => ['nullable', 'string', 'max:255'],
            // 'no_telepon' => ['nullable', 'string', 'max:15'],
            'no_telepon' => ['nullable', 'regex:/^[0-9\+\-\(\)\s]+$/', 'max:15'],
            'spesialis' => ['nullable', 'string', 'max:50'],
            'tgl_lahir' => ['nullable', 'date'],
            'jenis_kelamin' => ['nullable', 'string', 'in:Laki-laki,Perempuan'],
        ]);

        $otp = rand(100000, 999999);
        $nip = 'PSN' . rand(1000, 9999);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'nip' => $nip,
            'role' => 'Pasien',
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon,
            'spesialis' => $request->spesialis,
            'tgl_lahir' => $request->tgl_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'email_verification_code' => $otp,
        ]);
        // event(new Registered($user));

        Auth::login($user);

        Mail::to($user->email)->send(new EmailVerificationOtp($otp));
         return redirect()->route('verification.otp.form');
    }
}
