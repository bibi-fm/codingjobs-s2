@extends('mytemplate')

@section('title', 'Songs Page')

@section('css')
    <link rel="stylesheet" href="songs.css">
@endsection

@section('content')

    <h2>Songs list</h2>

    @if (!empty($mysongs))
        @foreach ($mysongs as $s)
            <p>Name : {{ $s->title }}</p>
            <p>Release date : {{ $s->release_date }}</p>
            <hr>
        @endforeach
    @else
        <p>No songs found.</p>
    @endif

@endsection
