@extends('layouts.master')

@section('content')
<div class="container">
<h1>Edit Data</h1>

<form action="/warga/{{$warga->id}}" method="POST">
    @method('put')
<div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">NAMA</label>
        <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$warga->nama}}">
    </div>
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">NO HP</label>
        <input type="text" name="nohp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$warga->nohp}}">
    </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">JENIS KELAMIN</label>
            <input type="text" name="jenis_kelamin" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"value="{{$warga->jenis_kelamin}}">
    </div>
            @csrf
            <select class="form-select" name="jenis_kelamin">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L" @if($warga->jenis_kelamin == "L") selected @endif>MALE</option>
                <option value="P" @if($warga->jenis_kelamin == "P") selected @endif>FEMALE</option>
            </select><br>  
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">TINGKAT PENDIDIKAN</label>
            <input type="text" name="tingkatpendidikan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$warga->tingkatpendidikan}}">
    </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">alamat</label>  
            <textarea class="form-control" name="alamat" cols="30" rows="10">{{$warga->alamat}}</textarea><br>
        </div>
            <input type="submit" name="submit" class="btn btn-danger" value="Update">
</form>
</div>
