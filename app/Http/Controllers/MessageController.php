<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageCreated;
use App\Models\Message;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function create()
    {
        return view('contacts.create');
    }
    public function store(ContactRequest $request)
    {
        $msg = Message::create($request->only('name', 'email', 'message'));

        Mail::to(config('laracarte.admin_support_email'))
            ->send(new ContactMessageCreated($msg));

        flashy('Nous vous réponderons dans les plus brefs délais !');

        return redirect()->route('home');
    }
}
