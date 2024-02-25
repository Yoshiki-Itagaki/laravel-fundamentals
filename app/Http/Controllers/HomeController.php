<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
       $post = Post::find(57);
       $post->title = 'new post 2024/02/25 which will be updated this time';
       $post->description = 'description for the update post 2024/02/25, 3 p.m.';

       $post->save();

       return $post;

       //find() -> return a record
       //get() -> return an array of a record(s)


    }
}
