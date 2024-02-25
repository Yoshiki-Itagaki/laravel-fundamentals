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
        //# Aggregate Statements

        //count
        // return DB::table('posts')->count();
        //max
        // return DB::table('posts')->max('views');
        //min
        // return DB::table('posts')->min('views');
        //avg
        // return DB::table('posts')->avg('views');
        //sum
        return DB::table('posts')->sum('views');


    }
}
