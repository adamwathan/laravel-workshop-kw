@extends('logged-in')

@section('content')
<ul class="list-group">
    <li class="list-group-item list-group-item-lg">
        <h4 class="u-mt-0 u-mb-0">Following</h4>
    </li>
    @if ($users->count() > 0)
        @foreach ($users as $user)
        <li class="list-group-item list-group-item-lg-short flex-justified">
            <div>
                <strong>{{ '@' . $user->username }}</strong>
            </div>
            <form action="/following/{{ $user->username }}" method="POST">
                {!! csrf_field() !!}
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" href="#" class="btn btn-sm btn-danger">Unfollow</button>
            </form>
        </li>
        @endforeach
    @else
        <div class="text-center">
            Yikes, it looks like you aren't following anyone yet!
        </div>
    @endif
</ul>
@endsection
