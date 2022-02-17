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

    /*
     * @return edit faq view
     */
    public function edit($faq_id)
    {
        $faq = DB::table('faqs')->where('id', $faq_id)->first();
        return view('edit-faq', [
            'faq' => $faq
        ]);
    }

    public function update($faq_id) {
        $faq = Faq::find($faq_id);

        $faq->question = request('question');
        $faq->answer =  request('answer');
        $faq->link = request('link');

        $faq->save();

        return redirect('/faq');
    }

    /*
     * method to delete faqs
     *
     * return all faqs view
    */
    public function delete($faq_id) {
        $faq = Faq::find($faq_id);

        $faq->delete();

        return redirect('/faq');
    }

}
