<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail()
    {
        $details = [
            'title' => 'Mail venant de Steph zoux',
            'body' => ' un mail de test utilisant gmail'
        ];
        Mail::to("groupeisi53@gmail.com")->send(new TestMail($details));
        return "Email envoyé" ;
    }

    
}
