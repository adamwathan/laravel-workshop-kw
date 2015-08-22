@extends('logged-in')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">Followers</div>
    <div class="panel-body">
        @if ($users->count() > 0)
            <ul class="list-group u-mb-0">
                @foreach ($users as $user)
                <li class="list-group-item">
                    {{ '@' . $user->username }}
                </li>
                @endforeach
            </ul>
        @else
            <div class="text-center">
                Yikes, it looks like you don't have any followers yet!
            </div>
        @endif
    </div>
</div>

@endsection
