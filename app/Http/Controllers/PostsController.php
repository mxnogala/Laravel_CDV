<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Post;

class PostsController {

    public function show($id) {
        // $post = DB::table('posts')->where('id', $id)->first();  //jeżeli znaleziono wartość w kolumnie odpowiadającą podanej wartości
    
        // $post = Post::where('id', $id)->firstOrFail();

    // dd($post); //zamienia na obiekt?
    
    // $posts = [
    //     'first' => 'Hello, this is my first blog post!',
    //     'second' => 'Now I am getting the hang of this blogging thing'
    // ];

    // if (!array_key_exists($post, $posts)) {
    //         abort(404, 'Sorry. That post was not found'); 
    // }

    // if (!$post) {
    //     abort(404); 
    // }

    return view('post', [
        'post' => Post::where('id', $id)->firstOrFail()
    ]);
    }

}

?>