@extends('layout')

@section('konten')

<h1 class="text-center">Tambah Siswa</h1>

<form action="{{route('siswa.submit')}}" method="post">
  @csrf
  <label>NIS</label>
  <input type="number" name="nis" placeholder="Insert Your NIS Here..." class="form-control mb-2">
  <label>Nama</label>
  <input type="text" name="nama" placeholder="Insert Your Name Here..." class="form-control mb-2">
  <label>Alamat</label>
  <input type="text" name="alamat" placeholder="Insert Your Address Here..." class="form-control mb-2">
  <label>Nomor Hp</label>
  <input type="number" name="no_hp" placeholder="Insert Your Phone Number Here..." class="form-control mb-2">
  <label>Jenis Kelamin</label>
  <input type="text" name="jenis_kelamin" placeholder="Insert Your Gender Here..." class="form-control mb-2">
  <label>Hobi</label>
  <input type="text" name="hobi" placeholder="Insert Your Hobby Here..." class="form-control mb-2">
  <button class="btn btn-success" class="form-control mb-2">Add Data</button>
</form>

@endsection