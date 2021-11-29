<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

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
        return view('students/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // cara insert data pertama
        // $student = new Student;
        // $student->nama = $request->nama;
        // $student->nim = $request->nim;
        // $student->email = $request->email;
        // $student->jurusan = $request->jurusan;
        // $student->save();

        // cara insert data pake create
        // Student::create([
        //     'nama' => $request->nama,
        //     'nim' => $request->nim,
        //     'email' => $request->email,
        //     'jurusan' => $request->jurusan
        // ]);

        // cara insert pake create lebih simple
        // ini karna kita udah nulisin property fillable di modelnya jdi tinggal panggil semua

        // validasi
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|size:8',
            'email' => 'required',
            'jurusan' => 'required'
        ]);
        Student::create($request->all());
        return redirect('/students')->with('status', 'Data Mahasiswa Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentModel  $studentModel
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentModel  $studentModel
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
     * @param  \App\Models\StudentModel  $studentModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        Student::where('id', $student->id)
            ->update([
                'nama' => $request->nama,
                'nim' => $request->nim,
                'email' => $request->email,
                'jurusan' => $request->jurusan
            ]);
        return redirect('/students')->with('status', 'Data Mahasiswa Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentModel  $studentModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('/students')->with('status', 'Data Mahasiswa Berhasil dihapus');
    }
}
