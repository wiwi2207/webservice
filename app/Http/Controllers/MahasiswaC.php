<?php
namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaC extends Controller
{
    public function index()
    {
        $data = Mahasiswa::all();

        //dd($data);

        return view('mahasiswa/index',compact('data'));
    }
    public function create()
    {
        return view('dosen/add');
    }
}
