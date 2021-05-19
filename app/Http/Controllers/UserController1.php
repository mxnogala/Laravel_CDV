<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController1 extends Controller
{
    public function index(Request $req) {
        // return $req->path();
        // return $req->url();
        // return $req->method();
        // foreach ($req as $key => $value) {
            //     echo $value.'<br>';
            // }
            // return $req->query();
            // $this->validate($req, ['address'=>'required'], ['address.required'=> "Adres nie może byc pusty"]);

            $req->validate(
                [
                    'address'=> 'required | min:4',
                    'email'=> 'required | email',
                ], 
                [
                    'address.required'=>'Pole adres jest wymagane',
                    'address.min' => "Pole adres musi mieć minimum 4 znaki",
                    'email.required'=>"Pole email jest wymagane",
                    'email.email' => 'Pole email musi być adresem poczty elektronicznej'
                ]
            );
        return 'Adres: '.$req->input('address').'<br>Email: '.$req->input('email');
    }
}
