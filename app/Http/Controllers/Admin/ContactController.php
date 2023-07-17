<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\contactform;
use \Illuminate\Http\Request;


class ContactController extends Controller
{
    public function sendContactForm(Request $request){



        $name = $request -> input('name');
        $email = $request -> input('email');
        $message = $request -> input('message');

        date_default_timezone_set("Asia/Riyadh");
        $contact_date = date('d:m:y');
        $contact_time = date('h:i:sa');

        $result = contactform::insert([
            'name' => $name,
            'email' => $email,
            'message' => $message,
            'contact_date' => $contact_date,
            'contact_time' => $contact_time

        ]);

        return $result;

    }
}
