@extends('layout')

@section('konten')

<h4> Edit Mahasiswa </h4>

<form action="{{ route('Mahasiswa.update', $Mahasiswa->id) }}" method="post">
    @csrf
    <label>Nama</label>
    <input type="text" name="nama" value="{{ $Mahasiswa->nama }}" class="form-control mb-2">
    <label>NIM</label>
    <input type="number" name="nim" value="{{ $Mahasiswa->nim }}" class="form-control mb-2">
    <label>Program Study</label>
    <input type="text" name="program_study" value="{{ $Mahasiswa->program_study }}" class="form-control mb-2">
    <label>Angkatan</label>
    <input type="year" name="angkatan" value="{{ $Mahasiswa->angkatan }}" class="form-control mb-2">
    <label>Kontak</label>
    <input type="number" name="kontak" value="{{ $Mahasiswa->kontak }}" class="form-control mb-2">

    <button class="btn btn-primary">Edit</button>

</form>



@endsection
