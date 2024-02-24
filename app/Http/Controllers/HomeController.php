<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // $blogs = [
        //     [
        //         'title' => 'Title one',
        //         'body'=> 'this is a body text one',
        //         'status' => 1
        //     ],
        //     [
        //         'title' => 'Title two',
        //         'body'=> 'this is a body text two',
        //         'status' => 0
        //     ],
        //     [
        //         'title' => 'Title three',
        //         'body'=> 'this is a body text three',
        //         'status' => 0
        //     ],
        //     [
        //         'title' => 'Title four',
        //         'body'=> 'this is a body text four',
        //         'status' => 1
        //     ]
        // ];
        // return DB::table('posts')->get();
        // return DB::table('posts')->find(1);
        // return DB::table('posts')->first();
        // return DB::table('posts')->where('status','=', 1)->get();
        // return DB::table('posts')->pluck('title', 'id');
        // return DB::table('posts')->where('id', '=', 10)->get();
        // return DB::table('posts')->where('id', '>', 10)->get();
        // return DB::table('posts')->where('id', '<', 10)->get();
        // return DB::table('posts')->where('status', 0)->get();
        return DB::table('posts')->where('status', '!=', 0)->get();

        return view('home', compact('blogs'));
    }
}
