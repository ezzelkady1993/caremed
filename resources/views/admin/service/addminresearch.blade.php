@extends('admin.layout.admin')

@section('content')

	<h3>Add A Research</h3> 
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			{!! Form::open(['route' => 'service.addResearch','method'=>'post','files'=>true]) !!}
				
				<div class="form-group">
					{{ Form::label('title' , 'Title') }}
					{{ Form::text('title' , null,array('class'=>
					'form-control','required'=>'','min-length'=>'5')) }}
				</div>

				<div class="form-group">
					{{ Form::label('description' , 'Description') }}
					{{ Form::textarea('description' , null,array('class'=>'form-control')) }}
				</div>

				<div class="form-group">
					{{ Form::label('author' , 'Author') }}
					{{ Form::text('author' , null,array('class'=>
					'form-control','required'=>'','min-length'=>'5')) }}
				</div>

				<div class="form-group">
					{{ Form::label('image' , 'Image') }}
					{{ Form::file('image' , null,array('class'=>'form-control')) }}
				</div>

				{{ Form::submit('Upload' , array('class'=>'btn btn-default')) }}
			{!! Form::close() !!}
		</div>
	</div>

@endsection