@extends('layouts.main')

@section('container')
<h3>Detail</h3>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">NIS</th>
      <th scope="col">TTL</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @php 
    $no = 1
    @endphp

    <tr>  
      <td>{{$no++}}</td>
      <td>{{$murid->nama_murid}}</td>
      <td>{{$murid->nis}}</td>
      <td>{{$murid->tanggal_lahir}}</td>
      <td>
        <a href="{{ route('student.all') }}" class="btn btn-primary">Kembali</a>
      </td>

    </tr>
  </tbody>
</table>

@endsection