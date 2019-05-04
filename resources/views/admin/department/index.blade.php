@extends('admin.layout.admin')

@section('content')

	<div class="navbar">
		<a class="navbar-brand" href="#">Department=></a>
		<ul class="nav navbar-nav">
			@if(!empty($departments))
				@forelse($departments as $department)
					<li>
						<a href="{{route('department.show',$department->dep_id)}}">{{$department->dep_name}}</a>
					</li>
					@empty
					<li>No data</li>
				@endforelse
			@endif
		</ul>

		<a class="btn btn-primary" data-toggle="modal" href="#modal-id">Add Department</a>
		<div class="modal fade" id="modal-id">
			<div class="modal-dialog">
				
				{!! Form::open(['route' => 'department.store','method' => 'post']) !!}
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title">Add Department</h4>
						</div>
						<div class="modal-body">
							<div class="form-group">
								{{ Form::label('dep_name' ,'Name') }}
								{{ Form::text('dep_name' ,null, array('class' => 'form-control')) }}
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Save changes</button>
						</div>
					</div> <!--/.modal content-->
				{!! Form::close() !!}

			</div> <!--/.modal dialog-->
		</div> <!--/.modal -->
	</div>


	@if(!empty($doctors))
		<section>
			<h3>Doctors</h3>

			<table class="table table-hover">
				<thead>
					<tr>
						<th>Doctors</th>
					</tr>
				</thead>

				@forelse($doctors as $doctor)
				<thead>
					<tr>
						<td>{{$doctor->doc_name}}</td>
					</tr>
					@empty
					<tr>
						<td>No Data</td>
					</tr>
				@endforelse
				</thead>
			</table>
		</section>
	@endif

@endsection