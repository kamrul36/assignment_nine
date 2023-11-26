<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function sendMessage(Request $request)
    {
        $validator = validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->route('contact.show')->withErrors($validator)->withInput();
        }

        return redirect()->route('contact.show')->with('success', 'Message sent successfully!');
    }
}
