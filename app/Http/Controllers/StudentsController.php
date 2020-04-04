<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
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
            $this->validate($request,[
                'nama' => 'required',
                'npm' => 'required|digits:7',
                'kelamin' => 'required',
                'jurusan' => 'required',
                'kelas' => 'required',
                'email' => 'required'
            ]);

            Student::create($request->all());
            return redirect('/students')->with('status','Data Berhasil Tersimpan');
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'nama' => 'required',
            'npm' => 'required|size:7',
            'kelamin' => 'required',
            'jurusan' => 'required',
            'kelas' => 'required',
            'email' => 'required'
        ]);

        Student::where('id', $student->id)
                ->update([
                    'nama' => $request->nama,
                    'npm' => $request->npm,
                    'kelamin' => $request->kelamin,
                    'tempatlahir' => $request->tempatlahir,
                    'tanggallahir' => $request->datepicker,
                    'alamat' => $request->alamat,
                    'email' => $request->email,
                    'jurusan' => $request->jurusan,
                    'kelas' => $request->kelas,
                    'password' => $request->password
                ]);
        return redirect('/students')->with('status','Data Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('/students')->with('status','Data Berhasil Dihapus');
    }
}
