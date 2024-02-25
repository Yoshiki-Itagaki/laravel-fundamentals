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
        // return  Post::all();
        // return Post::find(3);

        // $post = Post::find(3);
        // return $post->category_id;

        //return Post::findOrFail(80);

        // $posts = Post::all();
        // foreach($posts as $post){
        //     echo "$post->views \n";
        // };

        // return Post::where('views', '>', 200)->get();
        // return Post::where('views', '=', 200)->get();
        // return Post::where('views', '>', 100)->where('id', '<', 25)->get();
        return Post::where('views', '>', 200)->orWhere('id', '<', 25)->get();
    }
}
