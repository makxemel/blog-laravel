<?php

namespace App\Http\Controllers\Admin\Main;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

class IndexController
{
    public function __invoke()
    {
        $data = [
            'usersCount' => User::all()->count(),
            'categoriesCount' => Category::all()->count(),
            'postsCount' => Post::all()->count(),
            'tagsCount' => Tag::all()->count(),
        ];
        return view('admin.main.index', compact('data'));
    }
}
