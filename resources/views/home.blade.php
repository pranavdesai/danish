@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    <h3>Static Pages - </h3>
                    @foreach($showPages as $key=>$value)
                        <h5><a href="{{ route('page.show', $value->name) }}">{{ $value->page }}</a></h5>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
