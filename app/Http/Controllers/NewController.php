<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    public function show($post) {

        return view('post', [
            'post' => $post
        ]);
    }
}
