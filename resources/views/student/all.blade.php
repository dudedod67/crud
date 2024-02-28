@extends('layouts.main')

@section('container')
  <h3>Data Siswa</h3>
  @if(session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>{{ session('success') }}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

    {{-- <a href="/student/create/" class="btn btn-outline-success">Add</a> --}}
  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nis</th>
        <th scope="col">Nama</th>
        <th scope="col">Kelas</th>
        {{-- <th scope="col">Alamat</th> --}}
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @php 
        $no = 1;
      @endphp

      @foreach ($students as $student)
      <tr>  
        <td>{{$no++}}</td>
        <td>{{$student->nis}}</td>
        <td>{{$student->nama}}</td>
        <td>{{$student->kelas->nama}}</td>
        {{-- <td>{{$student->alamat}}</td> --}}
        <td>
          <a href="/student/detail/{{$student->id}}" class="btn btn-primary">Detail</a>
          {{-- <a href="/student/edit/{{$student->id}}" class="btn btn-warning">Edit</a>
          <form action="/students/delete/{{$student->id}}" method="post" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">

            @method('delete')
            @csrf
            <button class="btn btn-danger">Delete</button>
          </form> --}}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>


@endsection
