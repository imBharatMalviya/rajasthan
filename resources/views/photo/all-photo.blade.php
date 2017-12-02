@extends("layouts.app")

@section("content")

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 class="page-header">
				All Photo of {{$place->place_name}}
			</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2 col-md-offset-10">
			<a href="{{url('photo/add/'.$place->id)}}" class="btn btn-success">Add New</a>
		</div>
	</div>
	<div class="row">
			@foreach($photo as $p)
			<div class="col-md-4">
				<div class="thumbnail">
					<img src="{{asset('uploads/'.$p->photo)}}" style="height: 250px" />
					<div class="caption">{{$p->photo_name}}
						<a href="{{url('photo/delete/'.$p->id)}}" onclick="return confirm('are you sure')" class="btn btn-danger pull-right">X</a>
						<p>{{$p->photo_desc}}</p>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
@endsection