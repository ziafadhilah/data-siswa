<?php

namespace App\Exports;

use App\Models\Student;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
// use Maatwebsite\Excel\Concerns\FromCollection;

class StudentExport implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */

    public function view(): View
    {
        $students = Student::with('category')->get();
        return view('student.excel', [
            'students' => $students
        ]);
    }

    // public function collection()
    // {
    //     return Student::all();
    // }
}
