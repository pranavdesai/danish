@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">View Pages</div>
                <div class="panel-body">
				<table class="table">
					<thead>
						<tr>
							<th>#</th>
							<th>Page Url Name</th>
							<th>Page Heading</th>
							<th>Active</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($getPages as $key=>$value)
							<tr>
								{!! Form::open(['route' => ['page.destroy', $value->id], 'method' => 'delete']) !!}
									<th scope="row">{{ $key+1 }}</th>
									<td>{{ $value->name }}</td>
									<td>{{ $value->page }}</td>
									<td>{{ $value->active }}</td>
									<td><a class="btn btn-primary" href="{{ route('page.edit',$value->id) }}">EDIT</a>  
										<button type="submit" class="btn btn-primary">
		                               		DELETE
		                                </button>
										
									</td>
								{!! Form::close() !!}
							</tr>

							
						@endforeach
					</tbody>
				</table>
						
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
