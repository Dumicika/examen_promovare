<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GuestController extends Controller
{
    public function index():View
    {
        $articles = Article::limit(4)->get();
        return view('guest.index', ['articles' => $articles]);
    }
}
