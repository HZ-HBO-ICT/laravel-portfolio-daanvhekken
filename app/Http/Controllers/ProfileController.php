<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProfileController
{
    /*
     * @return profile view
     */
    public function show()
    {
        $articles = DB::table('articles')->latest()->take(3)->get();

        return view('profile', [
            'articles' => $articles
        ]);
    }
}
