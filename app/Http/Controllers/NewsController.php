<?php

namespace App\Http\Controllers;

use App\Services\Newsletter;
use Illuminate\Validation\ValidationException;

class NewsController extends Controller
{
    function __invoke(Newsletter $newsletter)
    {
        request()->validate([
            'email' => 'required|email'
        ]);

        try {
            $newsletter->subscribe(request('email'));
        } catch (\Exception $e) {
            throw ValidationException::withMessages([
                'email' => 'This email could not be added to our list'
            ]);
        }

        return redirect('/')->with('success', 'You are now signed for letters');
    }
}