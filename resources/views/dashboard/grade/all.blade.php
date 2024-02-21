@extends('dashboard.main')
@section('content')
<table class="table">
    <thead class="">
      <tr>
        <th scope="col">Kelas</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($kelass as $kelas)
        <tr>
        <td>{{ $kelas->nama }}</td>
        <td>
          
          <div class="d-flex gap-2">
          <form action="/kelas/delete/{{ $kelas->id }}" method="post" onsubmit="return confirm('Are you sure you want to delete this student?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
          </div>
        
         
        </td>
      </tr>
        @endforeach
    </tbody>
  </table>
  <a href="/kelas/create/" class="btn btn-outline-success">Add</a>

@endsection