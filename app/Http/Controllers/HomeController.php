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
    //    $post = Post::create([
    //         "title"=> 'this is from mass assignment',
    //         'description' => 'this is decription for mass assignment',
    //         'status' => 1,
    //         'publish_date' => date('Y-m-d'),
    //         'user_id' => 1,
    //         'category_id' => 2,
    //         'views' => 500
    //    ]);

        // $post = Post::find(59)->update([
        //     "title"=> 'The data has been updated!',
        //     "description" => "Description for the updated data"
        // ]);

        $post = Post::where('status', 1)->where('id', '<', 10)->update([
            "title"=> 'The data has been updated!',
            "description" => "Description for the updated data",
            "status" => 0
        ]);

        dd('Success!');


    }
}
