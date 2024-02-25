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
        // #1 join query without the select query

        // return DB::table('posts')->join('categories', 'posts.category_id', '=', 'categories.id')->get();

        // {
        //     "id": 1,
        //     "title": "PmhivFTPYNXh47fplFPf",
        //     "description": "A8ZZkHHUgUurOTGgTIqb",
        //     "status": 1,
        //     "created_at": null,
        //     "updated_at": null,
        //     "publish_date": "2024-02-20",
        //     "user_id": 1,
        //     "category_id": 1,
        //     "name": "News"
        // },
        // {
        //     "id": 2,
        //     "title": "The data is updated again!",
        //     "description": "This is a whole new description!",
        //     "status": 1,
        //     "created_at": null,
        //     "updated_at": null,
        //     "publish_date": "2024-02-24",
        //     "user_id": 1,
        //     "category_id": 2,
        //     "name": "Tech"
        // },
        // {
        //     "id": 3,
        //     "title": "Updated the data!",
        //     "description": "Testing out the insert statement!",
        //     "status": 1,
        //     "created_at": null,
        //     "updated_at": null,
        //     "publish_date": "2024-02-24",
        //     "user_id": 1,
        //     "category_id": 3,
        //     "name": "Education"
        // }



        // #2 join query with the select query for the table 'posts'

        // return DB::table('posts')->join('categories', 'posts.category_id', '=', 'categories.id')
        // ->select('posts.*')
        // ->get();

        // {
        //     "id": 52,
        //     "title": "PmhivFTPYNXh47fplFPf",
        //     "description": "A8ZZkHHUgUurOTGgTIqb",
        //     "status": 1,
        //     "created_at": null,
        //     "updated_at": null,
        //     "publish_date": "2024-02-20",
        //     "user_id": 1,
        //     "category_id": 1
        // },
        // {
        //     "id": 54,
        //     "title": "The data is updated again!",
        //     "description": "This is a whole new description!",
        //     "status": 1,
        //     "created_at": null,
        //     "updated_at": null,
        //     "publish_date": "2024-02-24",
        //     "user_id": 1,
        //     "category_id": 2
        // },
        // {
        //     "id": 55,
        //     "title": "Updated the data!",
        //     "description": "Testing out the insert statement!",
        //     "status": 1,
        //     "created_at": null,
        //     "updated_at": null,
        //     "publish_date": "2024-02-24",
        //     "user_id": 1,
        //     "category_id": 3
        // }


         // #3 join query with the select query for the table 'categories'

         return DB::table('posts')->join('categories', 'posts.category_id', '=', 'categories.id')
         ->select('categories.*')
         ->get();

        //  {
        //     "id": 1,
        //     "name": "News",
        //     "created_at": null,
        //     "updated_at": null
        // },
        // {
        //     "id": 2,
        //     "name": "Tech",
        //     "created_at": null,
        //     "updated_at": null
        // },
        // {
        //     "id": 3,
        //     "name": "Education",
        //     "created_at": null,
        //     "updated_at": null
        // }


    }
}
