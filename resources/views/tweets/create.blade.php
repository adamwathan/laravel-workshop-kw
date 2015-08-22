<div class="panel panel-primary">
    <div class="panel-heading">Post a new tweet</div>
    <div class="panel-body">
        <form action="/tweets" method="POST">
            {!! csrf_field() !!}
            <div class="form-group {{ $errors->first('tweet', 'has-error') }}">
                <textarea class="form-control" name="tweet" rows="3">{{ old('tweet') }}</textarea>
                @if ($errors->has('tweet'))
                    <p class="help-block">
                        {{ $errors->first('tweet') }}
                    </p>
                @endif
            </div>
            <div class="text-right">
                <button class="btn btn-primary btn-block">Tweet</button>
            </div>
        </form>
    </div>
</div>
