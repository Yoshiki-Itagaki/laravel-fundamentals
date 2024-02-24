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
        // DB::table('posts')->where('id', 56)->delete();
        DB::table('posts')->delete(53);

        dd('success!');


    }
}
