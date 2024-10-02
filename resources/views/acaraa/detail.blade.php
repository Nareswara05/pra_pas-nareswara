@extends('layouts.main')

@section('container')
<h3>Detail</h3>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Acara</th>
      <th scope="col">Jumlah Panitia</th>
      <th scope="col">Waktu Acara</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @php 
    $no = 1
    @endphp

    <tr>  
      <td>{{$no++}}</td>
      <td>{{$acara->nama_acara}}</td>
      <td>{{$acara->jumlah_panitia}}</td> 
      <td>{{$acara->waktu_acara}}</td>
      <td>
        <a href="{{ route('acaraa .all') }}" class="btn btn-primary">Kembali</a>
      </td>

    </tr>
  </tbody>
</table>

@endsection