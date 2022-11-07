@extends('layouts.main')

@section('container')
    <h1>SMK CINTA BUMI KHATULISTIWA</h1>
    <h3>Motto</h3>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $img }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">

@endsection