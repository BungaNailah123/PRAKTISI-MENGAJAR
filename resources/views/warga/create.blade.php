@extends('layouts.master')
@section('content')
<br>
<br>
<br>
    <center>
        <div class="container">
            <form action="/warga/store" method="POST">
                <h1>CREATE WARGA</h1>
                @csrf 
                <input type="text" name="nama"placeholder="Nama"> <br> 
                <input type="text" name="nik"placeholder="Nik"> <br> 
                <input type="text" name="no_kk"placeholder="No.kk"> <br> 
                <select name="jenis_kelamin">
                <option value="">pilih jenis kelamin</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
                </select> <br>
                <textarea name="alamat" id=" rows="10"></textarea> <br>
                <input type="submit" name="submit" value="save">
            </form>
    
        </div>
    
    </center>
    
@endsection
