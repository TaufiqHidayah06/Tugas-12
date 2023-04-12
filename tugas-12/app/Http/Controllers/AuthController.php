<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function regis() {
        return view('registrasi');
    }
    public function proses(Request $request)
    {
        $firstname = $request['firstname'];
        $lastname = $request['lastname'];
        $pesan = $request['pesan'];
        return view('welcome', compact('firstname', 'lastname', 'pesan'));
    }
}