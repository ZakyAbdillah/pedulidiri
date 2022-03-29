<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use \App\User;
class AuthController extends Controller
{   
    public function home()
    {
        return view ('dashboard.home');
    }
    public function login()
    {
        return view ('Auth.login');
    }

    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('username','password'))) {
            if (auth::user()->role == 'admin') {
                return redirect('/datauser');
            }
            return redirect('/home');
        }
        return redirect('/login');
    }

    public function regist()
    {
        return view ('Auth.regist');
    }
    public function postregister(Request $request)
    {
        $this->validate($request, [
            'password'=>'nullable|required_with:password_confirmation|string|confirmed'
        ]);
        User::create ([
            'nik' => $request->nik, 
            'role' => 'user',
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            // 'foto' => $request->foto,
            // 'telp' => $request->telp,
            'alamat' => $request->alamat,
            'password' => bcrypt($request->password) 
        ]);
        return redirect('/login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

}
