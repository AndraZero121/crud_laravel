@extends('layout')

@section('konten')

<h1 class="text-center">Edit Siswa</h1>

<form action="{{route('siswa.update', $siswa->id)}}" method="post">
  @csrf
  <label>NIS</label>
  <input type="number" name="nis" value="{{$siswa->nis}}" placeholder="Insert Your NIS Here..."
    class="form-control mb-2">
  <label>Nama</label>
  <input type="text" name="nama" value="{{$siswa->nama}}" placeholder="Insert Your Name Here..."
    class="form-control mb-2">
  <label>Alamat</label>
  <input type="text" name="alamat" value="{{$siswa->alamat}}" placeholder="Insert Your Address Here..."
    class="form-control mb-2">
  <label>Nomor Hp</label>
  <input type="number" name="no_hp" value="{{$siswa->no_hp}}" placeholder="Insert Your Phone Number Here..."
    class="form-control mb-2">
  <label>Jenis Kelamin</label>
  <input type="text" name="jenis_kelamin" value="{{$siswa->jenis_kelamin}}" placeholder="Insert Your Gender Here..."
    class="form-control mb-2">
  <label>Hobi</label>
  <input type="text" name="hobi" value="{{$siswa->hobi}}" placeholder="Insert Your Hobby Here..."
    class="form-control mb-2">
  <button class="btn btn-success" class="form-control mb-2">Edit Data</button>
</form>

@endsection