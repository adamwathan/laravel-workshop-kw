@extends('logged-in')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Your Tweets</div>
        <div class="panel-body">
            @foreach ($tweets as $tweet)
                @include('tweets.show', ['tweet' => $tweet])
            @endforeach
            {!! $tweets->render() !!}
        </div>
    </div>
@endsection
