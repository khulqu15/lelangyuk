<?php

namespace App\Http\Controllers;

use App\Mail\contactUs;
use App\Models\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public $email;

    public function __construct(Email $email)
    {
        $this->email = $email;
    }

    public function store(Request $request)
    {
        $email = new Email();
        $email->name = $request->name;
        $email->email = $request->email;
        $email->subject = $request->subject;
        $email->text = $request->text;
        Mail::to('valennaura6@gmail.com')->send(new contactUs($email));
        $email->save();
        return redirect()->back()->with('success', 'Email berhasil dikirim');
    }
}
