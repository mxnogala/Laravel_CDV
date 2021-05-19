<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactForm(Request $req)
    {
        $req->validate(
            [
                'firstName'=>'required',
                'email'=>'required',
                'password'=>'required',
                'number'=>'required',
                'gender'
            ]
        );
    }
}
