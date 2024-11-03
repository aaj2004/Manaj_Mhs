@extends('layout')

@section('konten')

<h4> Tambah Mahasiswa </h4>

<form action="{{ route('Mahasiswa.submit') }}" method="post">
    @csrf
    <label>Nama</label>
    <input type="text" name="nama" class="form-control mb-2">
    <label>NIM</label>
    <input type="number" name="nim" class="form-control mb-2">
    <label>Program Study</label>
    <input type="text" name="program_study" class="form-control mb-2">
    <label>Angkatan</label>
    <input type="year" name="angkatan" class="form-control mb-2">
    <label>Kontak</label>
    <input type="number" name="kontak" class="form-control mb-2">

    <button class="btn btn-primary">Tambah</button>

</form>



@endsection
