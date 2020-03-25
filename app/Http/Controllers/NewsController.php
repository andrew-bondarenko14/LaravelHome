<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function get()
    {
        $news = DB::table('news')->pluck('title');
        dd($news);
    }
}
