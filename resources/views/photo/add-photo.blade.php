@extends("layouts.app")

@section("content")

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 class="page-header">
				Add New Photo to {{$place->place_name}}
			</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			{!!Form::open(['url' => 'photo/save', 'method' => 'post','files'=>'true'])!!}
			{!!Form::hidden('place_id',$place->id)!!}
			<div class="form-group"> 
				{!!Form::label('photo_name', 'Photo Name')!!}
				{!!Form::text('photo_name',null,['class'=>'form-control','placeholder'=>'Enter Photo Name'])!!}
			</div>
			<div class="form-group"> 
				{!!Form::label('photo', 'Photo')!!}
				{!!Form::file('photo',null,['class'=>'form-control','placeholder'=>'Enter Photo Name'])!!}
			</div>
			<div class="form-group"> 
				{!!Form::label('photo_desc', 'Photo Description')!!}
				{!!Form::textarea('photo_desc',null,['class'=>'form-control','placeholder'=>'Enter Photo Description'])!!}
			</div>
			<div class="form-group"> 
				{!!Form::submit('Upload Photo',['class'=>'btn btn-success'])!!}
			</div>
			{!!Form::close()!!}
		</div>
	</div>
</div>
@endsection