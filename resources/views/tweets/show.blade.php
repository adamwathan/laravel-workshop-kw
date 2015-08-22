<div class="panel panel-default">
    <div class="panel-heading">
        <strong>{{ $tweet->user->username }}</strong>
        {{ $tweet->created_at->diffForHumans() }}
    </div>
    <div class="panel-body">
        {{ $tweet->message }}
    </div>
</div>
