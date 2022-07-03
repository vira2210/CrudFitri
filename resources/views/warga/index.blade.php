@extends('layouts.master')

@section('content')
    <div class="container">
        <h1 align="center" class="fw-bold">Data Pelajar Desa Gajahrejo</h1>
        <a class="btn btn-dark" href="/warga/create">Add Data</a>
        <table class="table table-light table-striped">
<tr>
<th>NO</th>
<th>NAMA</th>
<th>NO HP</th>
<th>TINGKAT PENDIDIKAN</th>
<th>JENIS KELAMIN</th>
<th>ALAMAT</th>
<th>OPSI</th>
</tr>
@foreach ($warga as $sw)
<tr>
<td>{{$loop->iteration}}</td>
<td>{{$sw->nama}}</td>
<td>{{$sw->nohp}}</td>
<td>{{$sw->tingkatpendidikan}}</td>
<td>{{$sw->jenis_kelamin}}</td>
<td>{{$sw->alamat}}</td>
<td>
<div class="btn-group" role="group" aria-label="Basic example">    
                        <a class="btn btn-warning" href="/warga/{{$sw->id}}/edit">Edit</a>
                            <form action="/warga/{{$sw->id}}" method="POST">
                                @csrf
                                @method('delete')
                                <input class="btn btn-danger" type="submit" name="submit" value="Delete" onclick="confirm('Sure?')">
                            </form>
                    </div>
                    </td>
                </tr>
        @endforeach
    </table>
        </div>
@endsection