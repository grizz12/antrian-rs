<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index (){
        return view('register.index',[
            'title' => 'Registrasi'
        ]);
    }

    public function store(Request $request){
        
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|max:255',
           

        ]);
        // dd('Registrasi sukses');
        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);
        
        $request->session()->flash('success','Registrasi Berhasil');
        
        return redirect('/login');
    }
}
