<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Semester;
use Illuminate\Http\Request;

class SemesterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $semesters = Semester::all();
        return view('pages.Semester.index', compact('semesters'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.Semester.createsemester');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'semester_name' => 'required',
        ]);

        $semester = Semester::create([
            'semester_name' =>  $request->semester_name,
        ]);


        if ($semester) {
            return redirect()->route('semester')->with('create', 'create Semester Succesfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $semester = Semester::find($id);

        return view('pages.Semester.editsemester', compact('semester'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $semester = Semester::find($id);

        $semester->update($request->all());

        return redirect()->route('semester')->with('update', 'Edit Semester Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $semester = Semester::find($id);
        $semester->delete();

        return redirect()->route('semester')->with('delete', 'delete Semester Succesfully');
    }
}
