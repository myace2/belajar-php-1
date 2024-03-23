<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()  {
        $user = User::all();
        return view('home.user.index', compact(['user']));

    }

    public function create() {
        return view('home.user.tambah');
    }
    
    public function store(Request $request)  {
        User::create([
            'nama_petugas' => $request->nama_petugas,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'level' => $request->level,
            $request->except(['_token']),
        ]);
        return redirect('/user');
    }

    public function destroy($id)  {
        $user = User::find($id);
        $user->delete();
        return redirect('/user');
    }

    public function show($id)  {
        $user =User::find($id);
        return view('home.user.edit',compact(['user']));
    }

    public function update($id, Request $request)  {
        $user = User::find($id);
        $user->update([
            'nama_petugas' => $request->nama_petugas,
            'username' => $request->username,
            'password' =>expect(['_token']),
            'level'=> $request->level,
        ]);
        return redirect('/user');
    }
}
