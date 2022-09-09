<?php

namespace App\Http\Controllers;

use App\Exports\StudentExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Category;
use App\Models\Student;
use Exception;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::with('category')->get();
        return view('/student.index', [
            'student' => $student,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $getCategory = Category::all();
        return view('student.create', [
            'getCategory' => $getCategory,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $student = new Student();
            $student->name = $request->name;
            $student->father = $request->father;
            $student->mother = $request->mother;
            $student->guardian = $request->guardian;
            $student->nisn = $request->nisn;
            $student->birth_location = $request->birth_location;
            $student->birthday = $request->birthday;
            $student->gender = $request->gender;
            $student->religion = $request->religion;
            $student->status = $request->status;
            $student->child_order = $request->child_order;
            $student->address_1 = $request->address_1;
            $student->address_2 = $request->address_2;
            $student->address_3 = $request->address_3;
            $student->telephone_1 = $request->telephone_1;
            $student->telephone_2 = $request->telephone_2;
            $student->telephone_3 = $request->telephone_3;
            $student->father_occupation = $request->father_occupation;
            $student->mother_occupation = $request->mother_occupation;
            $student->guardian_occupation = $request->guardian_occupation;
            $student->original_school = $request->original_school;
            $student->category_id = $request->category_id;
            $student->save();
            return redirect('/student')->with(
                'status',
                'Data berhasil di tambahkan'
            );
        } catch (Exception $e) {
            return response()->json(
                [
                    'message' => 'Internal error',
                    'code' => 500,
                    'error' => true,
                    'errors' => $e,
                ],
            );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::findOrFail($id);

        return view('student.show', [
            'student' => $student,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $getCategory = Category::all();
        $student = Student::findOrFail($id);

        return view('student.edit', [
            'student' => $student,
            'getCategory' => $getCategory,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $student = Student::findOrFail($id);
            $student->name = $request->name;
            $student->father = $request->father;
            $student->mother = $request->mother;
            $student->guardian = $request->guardian;
            $student->nisn = $request->nisn;
            $student->birth_location = $request->birth_location;
            $student->birthday = $request->birthday;
            $student->gender = $request->gender;
            $student->religion = $request->religion;
            $student->status = $request->status;
            $student->child_order = $request->child_order;
            $student->address_1 = $request->address_1;
            $student->address_2 = $request->address_2;
            $student->address_3 = $request->address_3;
            $student->telephone_1 = $request->telephone_1;
            $student->telephone_2 = $request->telephone_2;
            $student->telephone_3 = $request->telephone_3;
            $student->father_occupation = $request->father_occupation;
            $student->mother_occupation = $request->mother_occupation;
            $student->guardian_occupation = $request->guardian_occupation;
            $student->original_school = $request->original_school;
            $student->category_id = $request->category_id;
            $student->save();
            return redirect('/student')->with('status', 'Berhasil di ubah');
        } catch (Exception $e) {
            return response()->json(
                [
                    'message' => 'Internal error',
                    'code' => 500,
                    'error' => true,
                    'errors' => $e,
                ],
            );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $id)
    {
        try {
            Student::destroy($id->id);
            return redirect('/student')->with(
                'status',
                'Data berhasil di tambahkan'
            );
        } catch (Exception $e) {
            return response()->json(
                [
                    'message' => 'Internal error',
                    'code' => 500,
                    'error' => true,
                    'errors' => $e,
                ],
            );
        }
    }

    public function export()
    {
        return Excel::download(new StudentExport, 'Data-Siswa.xlsx');
    }
}
