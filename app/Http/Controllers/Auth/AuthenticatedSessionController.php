<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\UserStatus;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;
use  Illuminate\Support\Carbon;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        $request->user()->update([
            'last_login_at' => Carbon::now()->toDateTimeString(),
            'last_login_ip' => $request->getClientIp()
        ]);

        $userStatus = UserStatus::where('user_id', $request->user()->id)->first();

        try {
            if ($userStatus) {
                $userStatus->update([
                    'is_online' => true,
                    'last_activity_at' => Carbon::now()->toDateTimeString()
                ]);
            } else {
                UserStatus::create([
                    'user_id' => $request->user()->id,
                    'is_online' => true,
                    'last_activity_at' => Carbon::now()->toDateTimeString()
                ]);
            }
        } catch (\Throwable $th) {
            throw $th;
        }
        // Verifica y redirige a la última ruta visitada antes de cerrar sesión
        $lastVisitedRoute = $request->session()->pull('last_visited_route');
        return redirect()->intended($lastVisitedRoute ?: RouteServiceProvider::HOME);
        // return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Handle an incoming api authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function apiStore(LoginRequest $request)
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect']
            ]);
        }

        $user = User::where('email', $request->email)->first();

        $user->update([
            'last_login_at' => Carbon::now()->toDateTimeString(),
            'last_login_ip' => $request->getClientIp()
        ]);

        return response($user);
    }

    /**
     * Verifies user token.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function apiVerifyToken(Request $request)
    {
        $request->validate([
            'api_token' => 'required'
        ]);

        $user = User::where('api_token', $request->api_token)->first();

        if(!$user){
            throw ValidationException::withMessages([
                'token' => ['Invalid token']
            ]);
        }
        return response($user);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        // Almacena la última ruta visitada antes de cerrar sesión
        $request->session()->put('last_visited_route', url()->current());

        $user = $request->user();

        $user->user_status()->update([
            'is_online' => false,
            'last_activity_at' => Carbon::now()->toDateTimeString()
        ]);

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
