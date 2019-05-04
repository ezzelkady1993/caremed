@extends('admin.layout.admin')

@section('content')

	<h3>Doctors</h3>

	<ul>
		@forelse($doctors as $doctor)
		<li>
			<h4>Name of doctor:{{$doctor->doc_name}}</h4>
		</li>
		@empty
			<h4>No Doctor</h4>
		@endforelse
	</ul>
@endsection