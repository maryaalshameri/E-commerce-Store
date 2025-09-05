<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
        public function submit(Request $request)
    {
       
        $validated = $request->validate([
            'name'    => 'required|string|min:3',
            'email'   => 'required|email',
            'message' => 'required|string|max:500',
        ]);


        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
