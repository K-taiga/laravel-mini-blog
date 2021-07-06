<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('user')
            ->withCount('comments')
            ->orderByDesc('comments_count')
            ->onlyOpen()
            //defaultで作成日時を指定
            ->latest('updated_at') //orderByDesc('updated_at')
            ->get();

        return view('home', compact('blogs'));
    }
}
