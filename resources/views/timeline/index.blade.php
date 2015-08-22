@extends('logged-in')

@section('content')
<ul class="list-group">
    <li class="list-group-item list-group-item-lg">
        @include('tweets.create')
    </li>
    @foreach ($tweets as $tweet)
        <li class="list-group-item list-group-item-lg">
            @include('tweets.show', ['tweet' => $tweet])
        </li>
    @endforeach
</ul>
{!! $tweets->render() !!}
@endsection
