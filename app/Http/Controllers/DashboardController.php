<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class DashboardController
{
    /*
     * @return dashboard view
     */
    public function show()
    {
        $courses = DB::table('courses')->get();
        $grades = DB::table('grades')->get();

        return view('dashboard', [
            'courses' => $courses,
            'grades' => $grades
        ]
        );
    }
}
