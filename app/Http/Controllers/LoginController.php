<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use RealRashid\SweetAlert\Facades\Alert;


class LoginController extends Controller
{
    public function index() {
        return view('login');
    }

    public function authenticate(Request $request){
        $request->validate([
            'username' => 'required',
            'password'=> 'required',
        ]);

        $credential = $request->only(['username', 'password']);
        $username = $request->username;

        if (Auth::attempt($credential)) {
            $id_users = User::where('username', $username)->get()->first()->id;
            $role = Karyawan::where('id_users', $id_users)->get()->first()->role;
            if ($role == 'admin') {
                Alert::success('Success', 'Anda Berhasil Login');
                return redirect()->route('admin.dashboard');
            } 
            else if ($role == 'staff') {
                Alert::success('Success', 'Anda Berhasil Login');
                return redirect()->route('staf.dashboard');
            }
        }

        
        return back()->with('message','username atau password salah');
    }
}
