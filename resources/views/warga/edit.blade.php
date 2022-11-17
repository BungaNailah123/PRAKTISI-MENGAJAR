@extends('layouts.master')
@section('content')
<br>
<br>
<br>
    <center>
<div class="container">
<h1>EDIT DATA</h1>
<form action="/warga/{{ $warga->id }}" method="POST">
    @method('put')
    @csrf 
    <input type="text" name="nama"placeholder="Nama" value="{{ $warga->nama }}" ><br> 
    <input type="text" name="nik"placeholder="Nik" value="{{ $warga->nik }}" ><br> 
    <input type="text" name="no_kk"placeholder="No.kk" value="{{ $warga->no_kk }}"><br> 
    <select name="jenis_kelamin">
    <option value="">pilih jenis kelamin</option>
    <option value="L" @if ($warga->jenis_kelamin == "L")selected @endif >Laki-laki</option>
    <option value="P" @if ($warga->jenis_kelamin == "P")selected @endif >Perempuan</option>
    </select> <br>
    <textarea name="alamat" id=" rows="10" value="{{ $warga->alamat }}"></textarea> <br>
    <input type="submit" name="submit" class="btn btn-dark" value="save">
</form>
</div>
</center>
@endsection