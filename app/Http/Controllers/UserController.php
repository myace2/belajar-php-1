<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Jabatan;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()  {
        $user = User::all();
        return view('home.user.index', compact(['user']));

    }

    public function create() {
        $jabatan = Jabatan::All();
        return view('home.user.tambah',compact('jabatan'));
    }
    
    public function store(Request $request)  {
        User::create([
            'nama_user' => $request->nama_user,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'id_jabatan' => $request->id_jabatan,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon,
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
        $jabatan = Jabatan::All();
        $user =User::find($id);
        return view('home.user.edit',compact(['user','jabatan']));
    }

    public function update($id, Request $request)  {
        $user = User::find($id);
        $user->update([
            'nama_user' => $request -> nama_user,
            'username' => $request->username,
            // 'password' =>expect(['_token']),
            'id_jabatan'=> $request->id_jabatan,
        ]);
        return redirect('/user');
    }
}
