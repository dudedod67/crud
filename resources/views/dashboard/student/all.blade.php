@extends('dashboard.main')
@section('content')
<div class="row justify-content-end mt-3">
  <div class="col-md-3">
  <form action="/dashboard/student">
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Search" name="search" value="{{request('search')}}">
      <button class="btn btn-primary" type="submit" id="button-addon2">Search</button>
    </div>
  </form>
  </div>
  </div>

  <a href="/student/create/" class="btn btn-outline-success">Add</a>

<table class="table">
  <thead class="">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nis</th>
      <th scope="col">Name</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Kelas</th>
      <th scope="col">Alamat</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @php 
        $no = 1;
      @endphp

      @foreach ($student as $students)
      <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $students->nis }}</td>
        <td>{{ $students->nama }}</td>
        <td>{{ $students->tanggal_lahir }}</td>
        <td>{{ $students->alamat }}</td>
        <td>{{ $students->kelas->nama}}</td>
      <td>
        
        <div class="d-flex gap-2">
          <a href="/student/detail/{{$students->id}}" class="btn btn-primary">Detail</a>
          <a href="/student/edit/{{ $students->id }}" class="btn btn-warning"> Edit</a>
        <form action="/students/delete/{{ $students->id }}" method="post" onsubmit="return confirm('Are you sure you want to delete this student?');">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger">Delete</button>
      </form>
        </div>
      
       
      </td>
    </tr>
      @endforeach
  </tbody>
</table>

<div class="d-flex justify-content-center">
  {{ $student->links()}}
</div>

@endsection