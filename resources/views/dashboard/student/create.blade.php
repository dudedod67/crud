@extends('dashboard.main')

@section('content')
<h3>Create Student</h3>

     <form action="/students/store" method="post">
          @csrf    

          <div class="mb-3">
               <label for="nis" class="form-label">NIS</label>  
             <input type="text" class="form-control" id="nis" name="nis" required value="{{old('nis')}}">
          </div>

          <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" required value="{{old('nama')}}">
          </div>

         <div class="mb-3">
             <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
             <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required value="{{old('tanggal_lahir')}}">
         </div>

         <div class="mb-3">
            <label for="kelas_id" class="form-label">Kelas</label>
            <select class="form-select" name="kelas_id" id="kelas_id" required>
                @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama }}</option>
                @endforeach 
            </select>
        </div>
        
        

          <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" required>{{ old('alamat') }}</textarea>
        </div>

         <button type="submit" class="btn btn-primary">Submit</button>
       
         <a href="/dashboard/student" class="btn btn-secondary">Kembali</a>

     </form>
     
@endsection
