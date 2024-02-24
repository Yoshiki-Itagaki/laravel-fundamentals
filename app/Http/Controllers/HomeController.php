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
        DB::table('posts')->insert([
            [
                'title' => 'This is test data 2',
                'description' => 'gagagagaga',
                'status' => 1,
                'publish_date' => date('Y-m-d'),
                'user_id' => 1
            ],
            [
                'title' => 'This is test data 3',
                'description' => 'bababababa',
                'status' => 1,
                'publish_date' => date('Y-m-d'),
                'user_id' => 1
            ]
        ]);

        dd('success');

    }
}
