@extends('layouts/main')

@section('container')
    <h1 class="mb-5">SMK CINTA BUMI KHATULISTIWA</h1>
    <h1 class="mb-5">{{ $posts->title }}</h1>
    {!! $posts->body !!}
    
    <a href="/posts">Back to Posts</a>

@endsection