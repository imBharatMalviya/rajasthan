@extends("layouts.app")

@section("content")

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 class="page-header">
				All Place
			</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2 col-md-offset-10">
			<a href="{{url('place/add')}}" class="btn btn-success">Add</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Place Name</th>
						<th>Place Category</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach($place as $c)
						<tr>
							<td>{{$c->place_name}}</td>
							<td>{{$c->category_name}}</td>
							<td>
								<a href="{{url('place/edit/'.$c->id)}}" class="btn btn-warning">Edit</a>
								<a href="{{url('place/delete/'.$c->id)}}" class="btn btn-danger" onclick="return confirm('Are You Sure');">Delete</a>
								<a href="{{url('photo/'.$c->id)}}" class="btn btn-info">Photos</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection