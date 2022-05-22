<?php

namespace App\Http\Controllers;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class KaryawanC extends Controller
{
    //
    public function index()
    {
        $dtkrywn = Karyawan::all();
        //dd($karyawandata);
        return view('karyawan/index', compact('dtkrywn'));
    }

    public function create()
    {
        return view('karyawan/create');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        
        $this->validate($request,[
            'nama_karyawan' => 'required',
            'jk' => 'required',
            'alamat' => 'required|min:5',
            'devisi' => 'required',
            'level' => 'required',
            'jabatan' => 'required',
        ]);

        Karyawan::create($request->all());
        return redirect(url('data-karyawan'));
    }

    public function destroy(Karyawan $id)
    {
        $id->delete();
        return redirect(url('data-karyawan'));
    }

    public function edit(Karyawan $id)
    {
        return view('karyawan.edit', compact('id'));
    }

    public function update(Request $request, Karyawan $karyawan)
    {
        $this->validate($request,[
            'nama_karyawan' => 'required|unique:karyawan,nama_karyawan,. $dtkrywn->id',
            'jk' => 'required|min:5',
            'alamat' => 'required|min:5',
            'devisi' => 'required',
            'level' => 'required',
            'jabatan' => 'required',
        ]);

        $karyawan->update($request->all());
        return redirect(url('data-karyawan'));
    }

}
