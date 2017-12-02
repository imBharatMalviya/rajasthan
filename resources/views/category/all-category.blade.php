@extends("layouts.app")

@section("content")

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 class="page-header">
				All Category
			</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2 col-md-offset-10">
			<a href="{{url('category/add')}}" class="btn btn-success">Add</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Category Name</th>
						<th>Category Desc</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach($category as $c)
						<tr>
							<td>{{$c->category_name}}</td>
							<td>{{$c->category_desc}}</td>
							<td>
								<a href="{{url('category/edit/'.$c->id)}}" class="btn btn-warning">Edit</a>
								<a href="{{url('category/delete/'.$c->id)}}" class="btn btn-danger" onclick="return confirm('Are You Sure');">Delete</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection