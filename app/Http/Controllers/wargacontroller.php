<?php

namespace App\Http\Controllers;

use App\Models\warga;
use Illuminate\Http\Request;

class wargacontroller extends Controller
{
    public function index(){
       $warga = warga::all();
       return view('warga.index',compact(['warga']));
    }

    public function create()
    {
        return view('warga.create'); 
    }

    public function store(Request $request)
    {
        // dd($request->except(['_token','submit']));
        warga::create($request->except(['_token','submit']));
        return redirect('/warga');
    }

    public function edit($id)
    {
        $warga = warga::find($id);
        return view('warga.edit',compact(['warga']));
    }

    public function update($id, request $request)
    {
        $warga = warga::find($id);
        $warga->update($request->except(['_token','submit']));
        return redirect('/warga');
    }

    public function destroy($id)
    {
        $warga = warga::find($id);
        $warga->delete();
        return redirect('/warga');
    }
}