@extends('logged-in')

@section('content')
    @include('tweets.create')
    @include('tweets.timeline', ['tweets' => $tweets])
@endsection
