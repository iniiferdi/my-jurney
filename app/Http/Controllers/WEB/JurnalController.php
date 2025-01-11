<?php

namespace App\Http\Controllers\WEB;

use Carbon\Carbon;
use App\Models\Jurnal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JurnalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user()->id;
        $jurnals = Jurnal::where('id_user', $user)->get();
        return view('pages.JurnalSiswa.index', compact('jurnals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.JurnalSiswa.createjurnal');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kegiatan' => 'required',
        ]);

        $user = auth()->user()->id;
        $currentDate = Carbon::now()->toDateString();

        $jurnal = Jurnal::create([
            'kegiatan' =>  $request->kegiatan,
            'id_user' => $user,
            'date' => $currentDate,
            'status' => 0
        ]);


        if ($jurnal) {
            return redirect()->route('jurnal-siswa')->with('create', 'create Jurnal Succesfully');
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
        $jurnal = Jurnal::find($id);

        return view('pages.JurnalSiswa.editjurnal', compact('jurnal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $jurnal = Jurnal::find($id);

        $jurnal->update($request->all());

        return redirect()->route('jurnal-siswa')->with('update', 'Edit Jurnal Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jurnal = Jurnal::find($id);
        $jurnal->delete();

        return redirect()->route('jurnal-siswa')->with('delete', 'delete Jurnal Succesfully');
    }
}
