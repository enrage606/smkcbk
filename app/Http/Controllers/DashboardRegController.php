<?php

namespace App\Http\Controllers;

use App\Models\Regis;
use App\Models\bidang;
use Faker\Core\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardRegController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('dashboard.posts.index',[
            'registrasi' => Regis::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'bidangs' => bidang::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
            return redirect('/dashboard/posts')->with('success', 'Regis Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Regis  $registrasi
     * @return \Illuminate\Http\Response
     */

    public function show($id, Regis $registrasi)
    {
        $regis = Regis::find($id);
        return view('dashboard.posts.show', compact('regis'), [
            'bidangs' => bidang::all(),
            'registrasi' => Regis::all(),
        ]);
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Regis  $registrasi
     * @return \Illuminate\Http\Response
     */
    
    
    public function edit($id)
    {
        $regis = Regis::find($id);
        return view('dashboard.posts.edit', compact('regis'), [
            'bidangs' => bidang::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Regis  $registrasi
     * @return \Illuminate\Http\Response
     */
    
     public function print(Regis $regis)
    {
        return view('dashboard.posts.print', [
            'registrasi' => Regis::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Regis  $registrasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $rules = [
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
        ];
        $validatedData = $request->validate($rules);
        if($request->file('foto','ijazah','kk')){
            if($request->oldFoto){
                Storage::delete($request->oldFoto);
            }
            if($request->oldIjazah){
                Storage::delete($request->oldIjazah);
            }
            if($request->oldKk){
                Storage::delete($request->oldKk);
            }
            $validatedData['foto'] = $request->file('foto')->store('gmbr_foto');
            $validatedData['ijazah'] = $request->file('ijazah')->store('gmbr_ijazah');
            $validatedData['kk'] = $request->file('kk')->store('gmbr_kk');
        }
        $data = Regis::find($id);
        $data->update($validatedData);
        return redirect('/dashboard/posts')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Regis  $registrasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Regis $regis)
    { 
        if($regis->foto){
            Storage::delete($regis->foto);
        }
        if($regis->ijazah){
            Storage::delete($regis->ijazah);
        }
        if($regis->kk){
            Storage::delete($regis->kk);
        }


        Regis::destroy($id);
        return redirect('/dashboard/posts')->with('success', 'Data Terhapus');
    }
    
    public function search(Request $request)
    {
        if($request->has('search')){
            $data = Regis::where('name', 'LIKE', '%' .$request->search. '%')
            ->orWhere('id', 'LIKE', '%' .$request->search. '%')
            ->orWhere('gender', 'LIKE', '%' .$request->search. '%')
            ->orWhere('bidang', 'LIKE', '%' .$request->search. '%')
            ->get();
        }
        else{
            $data =Regis::all();
        }
        return view('dashboard.posts.index', ['registrasi' => $data]);
    }
}
