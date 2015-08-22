@extends('logged-in')

@section('content')
<ul class="list-group">
    <li class="list-group-item list-group-item-lg">
        <h4 class="u-mt-0 u-mb-0">Your Tweets</h4>
    </li>
    @foreach ($tweets as $tweet)
        <li class="list-group-item list-group-item-lg">
            @include('tweets.show', ['tweet' => $tweet])
        </li>
    @endforeach
</ul>
{!! $tweets->render() !!}
@endsection
