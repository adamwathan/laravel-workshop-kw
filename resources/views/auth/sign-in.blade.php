@extends('layout')

@section('body')
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Sign in to your Tweeter account</h4>
                </div>
                <div class="panel-body">
                    @if ($errors->has('auth'))
                        <div class="alert alert-info">
                            {{ $errors->first('auth') }}
                        </div>
                    @endif

                    <form action="/sign-in" method="POST">
                        <div class="form-group">
                            <label class="control-label">Username</label>
                            <input type="text" class="form-control" name="username">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
