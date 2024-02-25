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
       $post = new Post();

       $post->title = 'new post 2024/02/25';
       $post->description = 'description for the new post 2024/02/25';
       $post->status = 1;
       $post->publish_date = date('Y-m-d');
       $post->user_id = 1;
       $post->category_id = 2;
       $post->views = 400;

       $post->save();

       dd('Success!');

    }
}
