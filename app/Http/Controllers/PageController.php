<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Achievement;
use App\Models\Contact;

class PageController extends Controller
{
    public function home()
    {
        $achievements = Achievement::latest()->take(3)->get();
        $galleries = Gallery::latest()->take(3)->get();
        return view('frontend.home', compact('achievements', 'galleries'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function programs()
    {
        return view('frontend.programs');
    }

    public function gallery()
    {
        $galleries = Gallery::latest()->get();
        return view('frontend.gallery', compact('galleries'));
    }

    public function achievements()
    {
        $achievements = Achievement::latest()->get();
        return view('frontend.achievements', compact('achievements'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function submitContact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'nullable',
            'message' => 'required'
        ]);

        Contact::create($request->all());

        return redirect()->back()->with('success', 'Pesan Anda telah berhasil dikirim!');
    }
}
