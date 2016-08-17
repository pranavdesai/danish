@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h4>{{$errors->first()}}</h4>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Page</div>
                <div class="panel-body">
                    {!! Form::open(['route' => ['page.update', $getPage->id], 'method' => 'put', 'class'=>'form-horizontal']) !!}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Page Url Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $getPage->name }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('heading') ? ' has-error' : '' }}">
                            <label for="heading" class="col-md-4 control-label">Page Heading</label>

                            <div class="col-md-6">
                                <input id="heading" type="text" class="form-control" name="heading" value="{{ $getPage->page }}">

                                @if ($errors->has('heading'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('heading') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="heading" class="col-md-4 control-label">Page Active</label>

                            <div class="col-md-6">

                                <?php
                                    $yesChecked = !empty($getPage->active) ? 'checked' : '' ;
                                    $noChecked = !empty($getPage->active) ? '' : 'checked' ; 
                                ?>
                                
                                <input type="radio" name="active" value="1" {{ $yesChecked }}> Yes
                                <input type="radio" name="active" value="0" {{ $noChecked }}> No                               
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                                <textarea id="description" type="text" class="form-control" name="description">{{ $getPage->description }}</textarea>

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
                                    <i class="fa fa-btn fa-user"></i> Edit Page
                                </button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
