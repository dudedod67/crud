@extends('layouts.main')

@section('container')
    <h3>About Me</h3>
    <p>Nama: {{ $nama }}</p>
    <p>Kelas: {{ $kelas }}</p>
    <p>Foto:</p>
    <img src="{{ asset($foto) }}" alt="Foto" width="200" height="200">
    @endsection
