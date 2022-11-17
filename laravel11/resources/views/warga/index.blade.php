@extends('layouts.master')
@section('content')
    <div class="container">
        <center>
            <h1>DATA WARGA KECAMATAN KALIPURO</h1>
            <h2>Lingkungan Sukowidi RT 01/RW 02</h2>
            <a class="btn btn-dark" href="/warga/create">Tambah Data</a>
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>NAMA</th>
                    <th>NIK</th>
                    <th>NO.KK</th>
                    <th>ALAMAT</th>
                    <th>OPSI</th>
                </tr>
                @foreach($warga as $w)
                <tr>
                    <td>{{ $w->id }}</td>
                    <td>{{ $w->nama }}</td>
                    <td>{{ $w->nik }}</td>
                    <td>{{ $w->no_kk }}</td>
                    <td>{{ $w->alamat }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                        <a class="btn btn-dark" href="/warga/{{ $w->id }}/edit">Edit</a>
                        <form action="/warga/{{ $w->id}}"method="POST"> 
                            @csrf
                            @method('delete')
                            <input class="btn btn-dark" type="submit" value="Delete">
                        </form>
                        </div>
                    </td>
            
            
                </tr>
                @endforeach
            </table>
            </center> 
    </div>
    @endsection
    
