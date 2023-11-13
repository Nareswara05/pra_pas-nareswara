@extends('layouts.main')

@section('container')
    <h3>Data Guru</h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Umur</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp

            @foreach ($guru as $teacher)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $teacher->nama_guru }}</td>
                    <td>{{ $teacher->umur }}</td>
                    <td>
                        <a href="/teacher/detail/{{ $teacher->id }}" class="btn btn-primary">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
