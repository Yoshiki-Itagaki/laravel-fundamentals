<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // #1 one-to-one relationship
        // $users = User::all();
        // return view('home', compact('users'));

        // #2 inverse relationship
        // $addresses = Address::all();
        // return view('home', compact('addresses'));

        // #3 one-to-many relationship
        // $categories = Category::find(1)->posts;
        // return view("home", compact("categories"));

        // #4 many-to-many relationship
        // $post = Post::with('tags')->with('category')->first();

        // * with the attech() method, you can associate an item or
        // * an array of items of one table to one record of another table.
        // $post->tags()->attach($tag->id);
        // $post->tags()->attach([2,3,4]);

        $posts = Post::with('tags')->get();
        $tag = Tag::first();

        return view('home', compact('posts'));
    }
}
