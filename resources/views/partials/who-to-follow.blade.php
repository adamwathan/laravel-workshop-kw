<div class="panel panel-default">
    <div class="panel-heading">Who To Follow</div>
    <div class="panel-body">
        @if ($users->count() > 0)
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
        @else
            <div class="text-center">
                Yikes, it looks like you're the only tweeter!
            </div>
        @endif
    </div>
</div>
