<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    function tampil(){
        $Mahasiswa = Mahasiswa::get();
        return view('Mahasiswa.tampil', compact('Mahasiswa'));
    }

    function tambah(){
        return view('Mahasiswa.tambah');
    }

    function submit(Request $request){
        $request->validate([
            'nim' => 'required|integer|max:2147483647', // Pastikan nim adalah integer dan tidak melebihi batas
            'nama' => 'required|string|max:50', // Nama harus diisi dan tidak lebih dari 255 karakter
            'program_study' => 'required|string|max:70', // Program studi harus diisi
            'angkatan' => 'required|integer', // Angkatan harus diisi dan merupakan integer
            'kontak' => 'required|string|max:15', // Kontak harus diisi
        ]);
        
        $Mahasiswa = new Mahasiswa();
        $Mahasiswa->nama = $request->nama;
        $Mahasiswa->nim = $request->nim;
        $Mahasiswa->program_study = $request->program_study;
        $Mahasiswa->angkatan = $request->angkatan;
        $Mahasiswa->kontak = $request->kontak;
        $Mahasiswa->save();

        return redirect()->route('Mahasiswa.tampil')->with('success', 'Data updated successfully.');

    }

    function edit($id)  {
        $Mahasiswa = Mahasiswa::find($id);
        return view('Mahasiswa.edit', compact('Mahasiswa'));
    }


    function update (Request $request, $id) {
        $request->validate([
            'nim' => 'required|integer|max:2147483647', // Pastikan nim adalah integer dan tidak melebihi batas
            'nama' => 'required|string|max:255', // Nama harus diisi dan tidak lebih dari 255 karakter
            'program_study' => 'required|string|max:255', // Program studi harus diisi
            'angkatan' => 'required|integer', // Angkatan harus diisi dan merupakan integer
            'kontak' => 'required|string|max:255', // Kontak harus diisi
        ]);
        
        
        $Mahasiswa = Mahasiswa::findOrFail($id);
        $Mahasiswa->nama = $request->nama;
        $Mahasiswa->nim = $request->nim;
        $Mahasiswa->program_study = $request->program_study;
        $Mahasiswa->angkatan = $request->angkatan;
        $Mahasiswa->kontak = $request->kontak;
        $Mahasiswa->save();

        return redirect()-> route('Mahasiswa.tampil')->with('success', 'Data updated successfully.');

    }

    function delete($id)  {
        $Mahasiswa = Mahasiswa::find($id);
        $Mahasiswa->delete();
        return redirect()-> route('Mahasiswa.tampil');
    }

}
