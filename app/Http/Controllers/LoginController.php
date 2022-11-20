<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request, User $user)
    {
           
            $nip = $request->nip_pegawai;
            $password = $request->password;

    
            if (Auth::attempt(['nip_pegawai'=> $nip, 'password'=> $password, 'jenis_pegawai'=> 'Dosen'])) {
                $request->session()->regenerate();
                return redirect()->intended('/tabeldataskp');
            }
            else if (Auth::attempt(['nip_pegawai'=> $nip, 'password'=> $password, 'jenis_pegawai'=> 'Dekan']) || Auth::attempt(['nip_pegawai'=> $nip, 'password'=> $password, 'jenis_pegawai'=> 'Kajur'])) {
                $request->session()->regenerate();
                return redirect()->intended('/tabelpegawai');
            }
        
        return back()->with('pesan', 'Login Failed');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/')->with('logout', 'Anda Berhasil Log Out');
    }
}
