<?php
namespace App\Http\Controllers;

use DB;
use App\Post;

class PostController {
    public function show($slug)
    {
        
        return view('post', [
            'post' => Post::where('slug', $slug)->firstOrFail()
        ]);

    }
}