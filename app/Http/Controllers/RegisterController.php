<?php

namespace App\Http\Controllers;

use App\Models\Regis;
use App\Models\bidang;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'bidangs' => bidang::all(),
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'gender' => 'required',
            'tmptlahir' => 'required',
            'tgllahir' => 'required',
            'agama' => 'required',
            'almtasal' => 'required|max:255',
            'asalsklh' => 'required|max:255',
            'noijazah' => 'required|max:255',
            'almtasalsklh' => 'required|max:255',
            'nmayah' => 'required|max:255',
            'pkrjayah' => 'required|max:255',
            'nmibu' => 'required|max:255',
            'pkrjibu' => 'required|max:255',
            'almtortu' => 'required|max:255',
            'bidang' => 'required',
            'foto' => 'image|file|max:2048',
            'ijazah' => 'image|file|max:2048',
            'kk' => 'image|file|max:2048'

        ]);

        if($request->file('foto','ijazah','kk')){
            $validatedData['foto'] = $request->file('foto')->store('gmbr_foto');
            $validatedData['ijazah'] = $request->file('ijazah')->store('gmbr_ijazah');
            $validatedData['kk'] = $request->file('kk')->store('gmbr_kk');
        }

        Regis::create($validatedData);
        return redirect('/register')->with('success', 'Regis Berhasil');
    }
}

