<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Image;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $article = new Article();
        $article->name = $request->name;
        $article->info = $request->info;
        $article->user_id = auth()->id();
        $article->save();
        $id = $article->id;
        foreach ($request->images as $fille){
            $extension  = $fille->getClientOriginalExtension();
            $image = new Image();
            $image->article_id = $id;
            $image->name = md5(bcrypt(date('l jS \of F Y h:i:s A'))).'.'.$extension;
            $fille->move(public_path(env('UPLOADS_IMAGE')), $image->name);
            $image->save();
        }
        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article):RedirectResponse
    {
        $article->update($request->all());

        return redirect()->back()->with('success', 'Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article):RedirectResponse
    {
        foreach ($article->images as $image) {
            $image->delete();
        }
        
        $article->delete();
        return redirect()->back()->with('success', 'Deleted');
    }
}
