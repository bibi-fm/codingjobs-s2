@extends('mytemplate')

@section('title', 'Songs Page')

@section('content')

    <h2>Song Details</h2>

    <p>Name : {{ $s->title }}</p>
    <p>Release date : {{ $s->release_date }}</p>
    <hr>

@endsection
