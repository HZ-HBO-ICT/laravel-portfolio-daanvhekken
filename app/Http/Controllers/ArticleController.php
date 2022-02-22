<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /*
     * @return blog view
     */
    public function show(Article $article)
    {
        return view('article', [
            'article' => $article
        ]);
    }

    /*
     * @return blog view
     */
    public function index()
    {
        $articles = DB::table('articles')->latest()->get();

        return view('articles', [
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
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'read_time' => 'required'
        ]);

        Article::create($this->validateArticle());

        return redirect('/articles');
    }

    /*
     * @return edit blog view
     */
    public function edit(Article $article)
    {
        return view('edit-article', [
            'article' => $article
        ]);
    }

    /*
     * method to update blogs
     *
     * return updated blog view
    */
    public function update(Article $article)
    {
        $article->update($this->validateArticle());

        redirect(route('article.show', $article->id));
    }

    /*
     * method to delete blogs
     *
     * return all blogs view
    */
    public function delete(Article $article)
    {
        $article->delete();

        return redirect('/articles');
    }

    /**
     * @return array
     */
    public function validateArticle(): array
    {
        return [
            'title' => request('title'),
            'content' => request('content'),
            'read_time' => request('read_time'),
            'position' => 100
        ];
    }
}
