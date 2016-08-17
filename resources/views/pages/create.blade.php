@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h4>{{$errors->first()}}</h4>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Page</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('page') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Page Url Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('page') ? ' has-error' : '' }}">
                            <label for="page" class="col-md-4 control-label">Page Heading</label>

                            <div class="col-md-6">
                                <input id="page" type="text" class="form-control" name="page" value="{{ old('page') }}">

                                @if ($errors->has('page'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('page') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="active" class="col-md-4 control-label">Page Active</label>

                            <div class="col-md-6">
                                <input type="radio" name="active" value="1" checked> Yes
                                <input type="radio" name="active" value="0"> No                               
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                                <textarea id="description" type="text" class="form-control" name="description"></textarea>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Add Page
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
