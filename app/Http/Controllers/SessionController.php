<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class SessionController extends Controller
{
    function index(){
        return view("sesi/index");
    }
    function login(Request $request){

        $request->validate([
            'email'=> 'required',
            'password'=> 'required'
        ], [
            'email.required'=> 'Email Wajib Diisi',
            'password.required' => 'Password Wajib Diisi'
        ]
    );

    $infologin=[
        'email' => $request->email,
        'password' => $request->password
    ];
    if (Auth::attempt($infologin)){
        return redirect('/layout/home')->with('success','Berhasil Login');
    }else {
        return redirect('sesi')->withErrors('Username atau Password Salah');
    }

    }
    public function logout(){
        Auth::logout();
        return redirect('/sesi')->with('Success', 'Berhasil Logout');
    }
    public function register(){
        return view('sesi/register');
    }
    public function create(Request $request){
        Session::flash('name', $request->input('name'));
        Session::flash('email', $request->input('email'));
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5'

        ],[
            'name.required' => 'Nama Wajib Diisi',
            'email.required' => 'Email Wajib Diisi',
            'email.email' => 'Masukkan Email Dengan Benar',
            'email.unique' => 'Email Anda Sudah Digunakan',
            'password.required' => 'Password Wajib Diisi',
            'password.min' => 'Minimum Password 5 Karakter',
        ]);
        $data =[
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'password' => Hash::make($request->password)
          ];
          User::create($data);
          $infologin=[
            'email' => $request->email,
            'password' => ($request->password)
          ];
          if (Auth::attempt($infologin)){
            return redirect('layout/home')->with('success', Auth::user()->name. ' Berhasil Login');
          }else {
            return redirect('sesi')->withErrors('Username dan Password Salah');
          }
    }
}
