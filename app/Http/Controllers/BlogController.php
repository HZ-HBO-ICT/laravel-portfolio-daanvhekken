<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;

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

    /*
     * add new blog to article table
     *
     * @return blogs view
     */
    public function store()
    {
        $highest_position = (DB::table('articles')->latest('position')->first());

        request()->validate([
            'title' => 'required',
            'content' => 'required',
            'read_time' => 'required'
        ]);
        $article = new Article();
        $article->title = request('title');
        $article->content =  request('content');
        $article->read_time = request('readTime');
        $article->position = $highest_position->position + 10;

        $article->save();

        return redirect('/blogs');
    }

    /*
     * @return edit blog view
     */
    public function edit($blog_id)
    {
        $blog = DB::table('articles')->where('id', $blog_id)->first();
        return view('edit-article', [
            'blog' => $blog
        ]);
    }

    /*
     * method to update blogs
     *
     * return updated blog view
    */
    public function update($blog_id)
    {
        request()->validate([
            'title' => 'required',
            'content' => 'required',
            'read_time' => 'required'
        ]);

        $blog = Article::find($blog_id);

        $blog->title = request('title');
        $blog->content =  request('content');
        $blog->read_time = request('readTime');

        $blog->save();

        redirect('/blog/'.$blog_id);
    }

    /*
     * method to delete blogs
     *
     * return all blogs view
    */
    public function delete($blog_id)
    {
        $blog = Article::find($blog_id);

        $blog->delete();

        return redirect('/blogs');
    }
}
