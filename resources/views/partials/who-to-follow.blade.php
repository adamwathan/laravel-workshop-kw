<ul class="list-group">
    <li class="list-group-item">
        <h4>Who To Follow</h4>
    </li>
    @if ($users->count() > 0)
        @foreach ($users as $user)
        <li class="list-group-item flex-justified">
            <div>
                <strong>{{ '@' . $user->username }}</strong>
            </div>
            <form action="/following" method="POST">
                {!! csrf_field() !!}
                <input type="hidden" name="username" value="{{ $user->username }}">
                <button type="submit" href="#" class="btn btn-sm btn-default">Follow</button>
            </form>
        </li>
        @endforeach
    @else
        <div class="text-center">
            Yikes, it looks like you're the only tweeter!
        </div>
    @endif
</ul>
