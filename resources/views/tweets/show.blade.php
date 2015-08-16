@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    {{ $tweet->message }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
