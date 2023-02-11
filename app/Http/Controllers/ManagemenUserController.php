<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class ManagemenUserController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->where('is_admin', 0);

        if (request('search')) {
            $users->where('name', 'like', '%' . request('search') . '%')
            ->orWhere('email', 'like', '%' . request('search') . '%')
            ->orderBy('id', 'desc');
        }

        $users = $users->paginate(5);
        return view('user.index', compact('users'));
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
        Alert::success('Berhasil', 'Berhasil Menghapus User');
        return redirect('/user')->with('successs', 'user Berhasil Dihapus');
    }
}
