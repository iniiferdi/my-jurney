<?php

namespace App\Http\Controllers\WEB;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class CreateuserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('pages.UserTable.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.UserTable.createuser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'induk' => 'required',
            'username' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        $user = User::create([
            'full_name' =>  $request->full_name,
            'induk' =>  $request->induk,
            'username' =>  $request->username,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);


        if ($user) {

            return redirect()->route('user-table')->with('create', 'create User Succesfully');
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
        $users = User::find($id);

        return view('pages.UserTable.edituser', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);

        if ($request->password == null) {
            $user->update($request->except('password'));
        } else {
            $user->update($request->all());
        }

        return redirect()->route('user-table')->with('update', 'Edit User Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('user-table')->with('delete', 'delete User Succesfully');
    }
}
