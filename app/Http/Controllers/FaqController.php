<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Faq;
use Illuminate\Support\Facades\DB;

class FaqController
{
    /*
     * @return faq view
     */
    public function show()
    {
        $faqs = DB::table('faqs')->get();

        return view('faq', [
            'faqs' => $faqs
        ]);
    }

    /*
     * add new faq to faq table
     *
     * return to faq view
     */
    public function store() {

        $faq = new Faq();

        $faq->question = request('question');
        $faq->answer =  request('answer');
        $faq->link = request('link');

        $faq->save();

        return redirect('/faq');
    }
}
