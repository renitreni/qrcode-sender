<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendEmailRequest;
use App\Mail\SendQrCodeMail;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function sendEmail(SendEmailRequest $sendEmailRequest)
    {
        Mail::to($sendEmailRequest->get('email'))
            ->send(new SendQrCodeMail($sendEmailRequest->get('email')));

        return redirect()->back();
    }
}
