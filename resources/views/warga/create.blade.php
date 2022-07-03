@extends('layouts.master')

@section('content')
<div class="container">
<h1>TAMBAHKAN DATA</h1>

<form action="/warga/store" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">NAMA</label>
        <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">NO HP</label>
        <input type="text" name="nohp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">TINGKAT PENDIDIKAN</label>
            <input type="text" name="tingkatpendidikan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">JENIS KELAMIN</label>
            <input type="text" name="jenis_kelamin" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
            <select class="form-select" name="jenis_kelamin">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L">MALE</option>
                <option value="P">FEMALE</option>
            </select>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ALAMAT</label>  
            <textarea class="form-control" name="alamat" cols="30" rows="10"></textarea><br>
        </div>
            <input type="submit" name="submit" class="btn btn-success" value="Save">
</form>
</div>
@endsection