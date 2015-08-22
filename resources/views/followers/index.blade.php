@extends('logged-in')

@section('content')
<ul class="list-group">
    <li class="list-group-item list-group-item-lg">
        <h4 class="u-mt-0 u-mb-0">Followers</h4>
    </li>
    @if ($users->count() > 0)
        @foreach ($users as $user)
        <li class="list-group-item list-group-item-lg">
            <strong>{{ '@' . $user->username }}</strong>
        </li>
        @endforeach
    @else
        <div class="text-center">
            Yikes, it looks like you don't have any followers yet!
        </div>
    @endif
</ul>
@endsection
