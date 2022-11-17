<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class WargaController extends Controller
{
    public function index(){
     $warga = Warga::all(); 
     return view('warga.index',compact(['warga']));
    }
    public function create()
    {
        return view('warga.create');
    }
    public function store(Request $request)
    {
        Warga::create($request->except(['_token','submit']));
        return Redirect ('/warga');
    }
    public function edit($id)
    {
        $warga = Warga::find($id);
        return view('warga.edit',compact(['warga']));
    }
    public function update($id, Request $request)
    {
        $warga = Warga::find($id); 
        $warga->update($request->except(['_token','submit']));
        return Redirect ('/warga');
    }
    public function destroy($id)
    {
        $warga = Warga::find($id); 
        $warga->delete();
        return Redirect ('/warga');

    }
}
