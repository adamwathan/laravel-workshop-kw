@extends('logged-in')

@section('content')
    @include('tweets.create')
    @foreach ($tweets as $tweet)
        @include('tweets.show', ['tweet' => $tweet])
    @endforeach
    {!! $tweets->render() !!}
@endsection
