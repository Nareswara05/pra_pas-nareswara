@extends('layouts.main')

@section('container')
  <h3>Data Murid</h3>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">NIS</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @php 
        $no = 1;
      @endphp

      @foreach ($murid as $student)
      <tr>  
        <td>{{$no++}}</td>
        <td>{{$student->nama_murid}}</td>
        <td>{{$student->nis}}</td>
        <td>
          <a href="/student/detail/{{$student->id}}" class="btn btn-primary">Detail</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>


@endsection
