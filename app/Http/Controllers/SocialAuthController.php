<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use Auth;
use Exception;

class SocialAuthController extends Controller
{
    public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver('google')->user(); // contoh untuk Google
            // Logika untuk menyimpan atau mengotentikasi pengguna

            Auth::login($user, true);

            return redirect()->intended('/home'); // Atau halaman lainnya
        } catch (Exception $e) {
            \Log::error('Gagal melakukan otentikasi: ' . $e->getMessage());
            \Log::info('User redirected to home after login attempt');
            return redirect('/login')->with('error', 'Gagal melakukan otentikasi');
        }
    }
}
