<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegistrasiController extends Controller
{
    public function Index()
    
        {
            return view('registrasi.index', [
                'title' => 'Registrasi',
                'active' => 'registrasi'
            ]);
        }

        public function store(Request $request)
        {
            $validatedDate = $request->validate([
                'name' => 'required|max:255',
                'email' => 'required|email:dns|unique:users',
                'password' => 'required|min:5|max:255'
            ]);

            $validatedDate['password'] = Hash::make($validatedDate['password']);

            User::Create($validatedDate);

            $request->session()->flash('Success', 'Registration Successfull!! Please Login');

            return redirect('/login');
        }
}
