<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DataController extends Controller
{
    public function getPosts()
    {
        $postsTab =  Http::get('https://jsonplaceholder.typicode.com/posts')->json();
        
        return view('data', ['postsTab' => $postsTab]);
    }

    public function getAlbums()
    {
        $albumsTab =  Http::get('https://jsonplaceholder.typicode.com/photos')->json();
        
        return view('album', ['albumsTab' => $albumsTab]);
    }
}
