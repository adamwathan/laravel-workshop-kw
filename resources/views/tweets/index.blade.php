@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-7">
            @include('tweets.create')
            @include('tweets.timeline', ['tweets' => $tweets])
        </div>
        <div class="col-sm-5">
            <ul class="list-group">
                @foreach ($users as $user)
                <li class="list-group-item flex-justified">
                    <div>
                        {{ $user->username }}
                    </div>
                    @if (Auth::user()->follows($user))
                    <form action="/following/{{ $user->username }}" method="POST">
                        {!! csrf_field() !!}
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" href="#" class="btn btn-sm btn-danger">Unfollow</button>
                    </form>
                    @else
                    <form action="/following" method="POST">
                        {!! csrf_field() !!}
                        <input type="hidden" name="username" value="{{ $user->username }}">
                        <button type="submit" href="#" class="btn btn-sm btn-default">Follow</button>
                    </form>
                    @endif
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
