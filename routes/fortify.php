<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TwoFactorAuthController;

// Rutas de autenticación
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// Rutas de registro
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

// Rutas de restablecimiento de contraseña
Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');
Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
Route::post('/reset-password', [NewPasswordController::class, 'store'])->name('password.update');

// Rutas de verificación de correo electrónico
Route::get('/email/verify', [EmailVerificationPromptController::class, '__invoke'])->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, '__invoke'])->middleware(['signed', 'throttle:6,1'])->name('verification.verify');
Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// Rutas de autenticación de dos factores (2FA)
Route::get('/two-factor-challenge', [TwoFactorAuthController::class, 'showTwoFactorChallengeForm'])->name('two-factor.login');
Route::post('/two-factor-challenge', [TwoFactorAuthController::class, 'twoFactorChallenge'])->name('two-factor.login');

// Rutas de confirmación de contraseña antes de realizar acciones sensibles
Route::get('/confirm-password', [ConfirmablePasswordController::class, 'showConfirmForm'])->name('password.confirm');
Route::post('/confirm-password', [ConfirmablePasswordController::class, 'confirm']);

Route::post('/send-sms', [TwoFactorAuthController::class, 'sendSms'])->middleware(['auth']);
