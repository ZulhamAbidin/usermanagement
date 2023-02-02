<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class ManagemenUserController extends Controller
{
    public function index() /* menampilkan data */
    {
        return view('user.index', [
            "judul" => "List User",
            'user' => User::all()
        ]);
    }

     public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|min:6|max:255|unique:users',
            'password' => 'required|min:6|max:255',
            'is_admin' => 'required'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('success', 'Registration successfully!');

        return redirect('/user/index')->with('success', 'Berhasil Mendaftarkan User Baru!');
    }
    

     public function destroy(User $user) // delete
    {
        User::destroy($user->id);

        return redirect('/user')->with('success', 'user Berhasil Dihapus');
    }
}