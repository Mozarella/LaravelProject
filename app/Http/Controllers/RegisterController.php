<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index() {
        return view('register.index',
        [
            'title' => "Register",
            'active' => "register"

        ]);
    }

    public function store(Request $request) {
        
        // return $request->all();
        $validatedData = $request->validate([
            'jenis' => 'required','Putra','Putri',
            'kategori'=> 'required',
            'NIK' => ['required','min:16','unique:users','numeric'],
            'name' => ['required','min:4','max:255'],
            'tmptlahir' => 'required',
            'tgllahir' => 'required',
            'coach' => 'required',
            'institusi' => 'required',
            'username' => ['required', 'min:3','unique:users'],
            'email' => ['required','email:dns','unique:users'],
            'password' => ['required','min:8','max:255'],
             'CP' => ['required','min:11','max:13','numeric'],

            
        ]);
        $validatedData['password']= Hash::make($validatedData['password']);

        User::create($validatedData);
        // $request->session()->flash('success','Registrasi Berhasil');

        return redirect('/login')->with('success','Registrasi Berhasil');
    }
}
