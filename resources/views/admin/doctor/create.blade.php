@extends('admin.layout.admin')

@section('content')

	<h3>Add Doctor</h3>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			{!! Form::open(['route' => 'doctor.store','method'=>'post','files'=>true]) !!}
				
				<div class="form-group">
					{{ Form::label('doc_name' , 'Name') }}
					{{ Form::text('doc_name' , null,array('class'=>
					'form-control','required'=>'','min-length'=>'5')) }}
				</div>

				<div class="form-group">
					{{ Form::label('age' , 'Age') }}
					{{ Form::text('age' , null,array('class'=>'form-control')) }}
				</div>

				<div class="form-group">
					{{ Form::label('description' , 'Description') }}
					{{ Form::text('description' , null,array('class'=>'form-control')) }}
				</div>

				<div class="form-group">                
					{{ Form::label('department_id', 'Departments') }}                
					{{ Form::select('department_id', $departments, null , ['class' => 'form-control','placeholder'=>'Select Department']) }}            
				</div>

				<div class="form-group">
					{{ Form::label('image' , 'Image') }}
					{{ Form::file('image' , null,array('class'=>'form-control')) }}
				</div>

				{{ Form::submit('Create' , array('class'=>'btn btn-default')) }}
			{!! Form::close() !!}
		</div>
	</div>

@endsection