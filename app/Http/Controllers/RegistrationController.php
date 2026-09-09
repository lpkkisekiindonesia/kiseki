<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
        // Simple Math CAPTCHA
        $num1 = rand(1, 9);
        $num2 = rand(1, 9);
        session()->put('captcha_answer', $num1 + $num2);

        return view('frontend.registrations.create', compact('num1', 'num2'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'program' => 'required|string',
            'message' => 'nullable|string',
            'captcha' => 'required|numeric'
        ]);

        if ($request->captcha != session('captcha_answer')) {
            return back()->withErrors(['captcha' => 'Jawaban keamanan salah. Silakan coba lagi.'])->withInput();
        }

        Registration::create($request->except('captcha'));

        // Clear captcha from session
        session()->forget('captcha_answer');

        return redirect()->back()->with('success', 'Pendaftaran Anda berhasil dikirim! Tim kami akan segera menghubungi Anda.');
    }
}
