@foreach ($tweets as $tweet)
    @include('tweets.show', ['tweet' => $tweet])
@endforeach
{!! $tweets->render() !!}
