@extends('logged-in')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">Following</div>
    <div class="panel-body">
        @if ($users->count() > 0)
            <ul class="list-group u-mb-0">
                @foreach ($users as $user)
                <li class="list-group-item flex-justified">
                    <div>
                        {{ '@' . $user->username }}
                    </div>
                    <form action="/following/{{ $user->username }}" method="POST">
                        {!! csrf_field() !!}
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" href="#" class="btn btn-sm btn-danger">Unfollow</button>
                    </form>
                </li>
                @endforeach
            </ul>
        @else
            <div class="text-center">
                Yikes, it looks like you aren't following anyone yet!
            </div>
        @endif
    </div>
</div>

@endsection
