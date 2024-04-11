<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Fortify\Contracts\TwoFactorLoginResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Twilio\Rest\Client;

class TwoFactorAuthController extends Controller
{
    // Mostrar el formulario de autenticación de dos factores
    public function showTwoFactorChallengeForm(Request $request)
    {
        return view('auth.two-factor-challenge');
    }

    // Procesar la autenticación de dos factores
    public function twoFactorChallenge(Request $request)
    {
        $response = app(TwoFactorLoginResponse::class);

        return $response->toResponse($request);
    }

    // Función para enviar el código de verificación por SMS
    public function sendSms(Request $request)
     {
         $user = $request->user();
         $code = mt_rand(100000, 999999); // Generar un código de verificación aleatorio

         $twilio = new Client(env('TWILIO_ACCOUNT_SID'), env('TWILIO_AUTH_TOKEN'));
         $twilio->messages->create(
             $user->phone_number, // Número de teléfono del usuario
             [
                 'from' => env('TWILIO_FROM_NUMBER'),
                 'body' => 'Tu código de verificación es: ' . $code,
             ]
         );

         // Guardar el código de verificación en la base de datos
         $user->two_factor_code = $code;
         $user->save();

         return response()->json(['message' => 'Código de verificación enviado exitosamente']);
     }
}
