@extends('layouts.main')

@section('container')
    <article class="mb-5">
    </article>
    <h2>{{ $post['title'] }}</h2>
    <h5>{{ $post['author'] }}</h5>
    <p>{{ $post['body'] }} </p>

    <a href="/blog">Back To Blog</a>
@endsection
