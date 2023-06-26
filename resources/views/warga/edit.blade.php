@extends('layouts.master')

@section('content')
    <div class="container">
    <h1>Edit Data</h1>

<form action="/warga/{{$warga->id}}" method="POST">
    @method('put')
    @csrf
    <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$warga->nama}}">
                </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nik</label>
                <input type="text" name="nik" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$warga->nik}}">
                </div>
                
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">No.KK</label>
                <input type="text" name="no_kk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$warga->no_kk}}">
                </div>

            <select class="form-select" name="jenis_kelamin">
                <option value="">pilih jenis kelamin</option>
                <option value="L" @if($warga->jenis_kelamin == "L") selected @endif> Laki-Laki</option>
                <option value="P" @if($warga->jenis_kelamin == "P") selected @endif> Perempuan</option>
            </select><br>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat" rows="10"></textarea><br>
            </div>
            <input type="submit" name="submit" class="btn btn-info" value="update">
        </form>
    
    </div>
@endsection 