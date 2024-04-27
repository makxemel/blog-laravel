<?php

namespace App\Http\Controllers\Personal\Main;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

class IndexController
{
    public function __invoke()
    {
        return view('personal.main.index');
    }
}
