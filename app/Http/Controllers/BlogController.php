<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Facades\DB;

class BlogController
{
    /*
     * @return blog view
     */
    public function show($blog_id)
    {
        $blog = DB::table('articles')->where('id', $blog_id)->first();

        return view('blog', [
            'blog' => $blog
        ]);
    }

    /*
     * @return blog view
     */
    public function index()
    {
        $articles = DB::table('articles')->latest()->get();

        return view('blogs', [
            'articles' => $articles
        ]);
    }

    /*
     * @return create blog view
     */
    public function create()
    {
        return view('create');
    }

    public function store() {
        $highest_position = (DB::table('articles')->latest('position')->first());

        $article = new Article();

        $article->title = request('title');
        $article->content =  request('content');
        $article->read_time = request('readTime');
        $article->position = $highest_position->position + 10;

        $article->save();

        return redirect('/articles');
    }
}
