@extends("layouts.app")

@section("content")

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 class="page-header">
				Add Category
			</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			{!!Form::open(['url' => 'category/save', 'method' => 'post'])!!}
			<div class="form-group"> 
				{!!Form::label('category_name', 'Category Name')!!}
				{!!Form::text('category_name',null,['class'=>'form-control','placeholder'=>'Enter Category Name'])!!}
			</div>
			<div class="form-group"> 
				{!!Form::label('category_desc', 'Category Description')!!}
				{!!Form::textarea('category_desc',null,['class'=>'form-control','placeholder'=>'Enter Category Description'])!!}
			</div>
			<div class="form-group"> 
				{!!Form::submit('Save Category',['class'=>'btn btn-success'])!!}
			</div>
			{!!Form::close()!!}
		</div>
	</div>
</div>
@endsection