<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public $email;

    public function __construct(Email $email)
    {
        $this->email = $email;
    }

    public function sendEmail(Request $request)
    {

    }
}
