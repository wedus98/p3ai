@extends('layoutDashboard')
@section('title','Data Dosen Panel')

@section('page-header','Data Dosen Control')
@section('content')
	
	<div class="row">
		<div class="col-md-6">
				<div class="list-group">
						@foreach($jurusan as $data)
				<a href="" class="list-group-item"><span class="fa fa-folder"></span> {{$data->jurusan}}</a>
						@endforeach
					</div>	

		</div>
		
	</div>
	



@stop