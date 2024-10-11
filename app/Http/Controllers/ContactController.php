<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        dd('test');
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:255',
            'message' => 'nullable|string',
        ]);

        $data = [
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'message' => $request->input('message'),
        ];

        Mail::to('your-email@gmail.com')->send(new ContactFormMail($data));

        return back()->with('success', 'Mesajınız göndərildi!');
    }
}
