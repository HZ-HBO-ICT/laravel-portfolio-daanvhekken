<?php

namespace App\Http\Controllers;

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
        die('hellow');
    }
}
