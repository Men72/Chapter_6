@extends('layouts.app')

@section('content')
    <h2>Blog List</h2>

    @foreach($posts as $post)
        <div>
            <h3>{{ $post['title'] }}</h3>
            <a href="/posts/{{ $post['id'] }}">Read More</a>
        </div>
        <hr>
    @endforeach
@endsection