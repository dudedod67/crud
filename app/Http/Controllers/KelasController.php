<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{


    public function index()
    {
        $kelas = Kelas::all();

        return view('kelas', [
            'title' => 'Daftar Kelas',
            'kelas' => $kelas,
        ]);
    }


    // app/Http/Controllers/StudentsController.php

// app/Http/Controllers/KelasController.php

public function create()
{
    $kelas = Kelas::all();

    return view('kelas', [
        'title' => 'Tambah Data Siswa',
        'kelas' => $kelas,
    ]);
}

public function store(Request $request)
{
    $validatedData = $request->validate([
        'nama' => 'required',
    ]);

    Kelas::create($validatedData);

    return redirect()->route('kelas.create')->with('success', 'Kelas berhasil ditambahkan');
}


}   
