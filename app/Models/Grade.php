<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    /*
     * Add new grade to the grade table and do some checks
     */
    public function addResult($grade)
    {
        $this->refresh();

//      do nothing when the new grade is lower than the current grade
        if ($this->best_grade >= $grade) {
            return;
        }

        $this->best_grade = $grade;

//      If the result is higher or equal to the passing grade then the student has passed
        if ($this->best_grade >= $this->lowest_passing_grade) {
            $this->passed_at = now();
        }

        $this->save();
    }
}
