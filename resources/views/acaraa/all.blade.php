@extends('layouts.main')

@section('container')
  <h3>Data Acara</h3>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Acara</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @php 
        $no = 1;
      @endphp

      @foreach ($acara as $acaras)
      <tr>  
        <td>{{$no++}}</td>
        <td>{{$acaras->nama_acara}}</td>
        <td>
          <a href="/acaraa/detail/{{$acaras->id}}" class="btn btn-primary">Detail</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>


@endsection
