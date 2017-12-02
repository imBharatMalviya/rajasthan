@extends("layouts.app")

@section("content")

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 class="page-header">
				Add Place
			</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			{!!Form::open(['url' => 'place/save', 'method' => 'post'])!!}
			<div class="form-group"> 
				{!!Form::label('category_id', 'Select Category')!!}
				{!!Form::select('category_id',$category,null,['class'=>'form-control','placeholder'=>'Select Category'])!!}
			</div>
			<div class="form-group"> 
				{!!Form::label('place_name', 'Place Name')!!}
				{!!Form::text('place_name',null,['class'=>'form-control','placeholder'=>'Enter Place Name'])!!}
			</div>
			<div class="form-group"> 
				{!!Form::label('place_history', 'Place History')!!}
				{!!Form::textarea('place_history',null,['class'=>'form-control','placeholder'=>'Enter Place History'])!!}
			</div>
			<div class="row">
				<div class="col-md-6">
			<div class="form-group"> 
				{!!Form::label('lang', 'Place Longitute')!!}
				{!!Form::text('lang',null,['class'=>'form-control','placeholder'=>'Enter Place Longitute'])!!}
			</div>
				</div>
				<div class="col-md-6">
			<div class="form-group"> 
				{!!Form::label('lat', 'Place latitute')!!}
				{!!Form::text('lat',null,['class'=>'form-control','placeholder'=>'Enter Place latitute'])!!}
			</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
			<div class="form-group">
				{!!Form::label('timing_open', 'Place Timing Open')!!}
				{!!Form::text('timing_open',null,['class'=>'form-control','placeholder'=>'Enter Place Open Timing'])!!}
			</div>
				</div>
				<div class="col-md-6">
			<div class="form-group"> 
				{!!Form::label('timing_close', 'Place Timing Close')!!}
				{!!Form::text('timing_close',null,['class'=>'form-control','placeholder'=>'Enter Place Close Timing'])!!}
			</div>
				</div>
			</div>
			<div class="form-group"> 
				{!!Form::label('entry_fee', 'Place Entry Fee')!!}
				{!!Form::text('entry_fee',null,['class'=>'form-control','placeholder'=>'Enter Place Entry Fee'])!!}
			</div>
			<div class="form-group"> 
				{!!Form::label('place_address', 'Place Address')!!}
				{!!Form::textarea('place_address',null,['class'=>'form-control','placeholder'=>'Enter Place Address'])!!}
			</div>
			<div class="form-group"> 
				{!!Form::submit('Save Place',['class'=>'btn btn-success'])!!}
			</div>
			{!!Form::close()!!}
		</div>
	</div>
</div>
@endsection