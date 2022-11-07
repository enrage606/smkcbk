@extends('layouts/main')

@section('container')
    <h1 mb-5>SMK CINTA BUMI KHATULISTIWA</h1>

    @foreach ($posts as $post)
    <article>
        <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
        <p>{{ $post->excerpt }}</p>
    </article>
    @endforeach

@endsection