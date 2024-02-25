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
        // # Restore a record that has been soft-deleted
        // Post::withTrashed()->find(57)->restore();
        // dd('Successful!');

        // # Hard-delete a record
        Post::withTrashed()->find(59)->forceDelete();
        dd('Successful!');

    }
}
