@extends('layout')

@section('konten')

<div class="d-flex">
    <h4> Data Mahasiswa </h4>
    <div class="ms-auto">
        <a  href="{{ route('Mahasiswa.tambah') }}" class="btn btn-success">Tambah Data</a>

    </div>
</div>
    

<table class="table">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Program Study</th>
        <th>Angkatan</th>
        <th>Kontak</th>
        <th>Aksi</th>
    </tr>
    @foreach($Mahasiswa as $no=>$mhs)
    <tr>
        <td>{{ $no + 1 }}</td>
        <td>{{ $mhs->nama }}</td>
        <td>{{ $mhs->nim }}</td>
        <td>{{ $mhs->program_study }}</td>
        <td>{{ $mhs->angkatan }}</td>
        <td>{{ $mhs->kontak }}</td>

        <td>
            <a href="{{ route('Mahasiswa.edit', $mhs->id) }}" class="btn btn-sm btn-warning">Edit</a>
            <form action="{{ route('Mahasiswa.delete', $mhs->id) }}" method="post">
                @csrf
                <button class="btn btn-sm btn-danger">Hapus</button>
            </form>
        </td>

    </tr>
    @endforeach
</table>

@endsection
