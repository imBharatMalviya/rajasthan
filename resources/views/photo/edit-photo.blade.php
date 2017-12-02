@extends('layouts.app')
@section('content')
<div class="container">
	@include('errors')
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>Edit Category</h1>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			{!!Form::model($category,['url' => 'category/update/'.$category->id, 'method' => 'post'])!!}
			<div class="form-group"> 
				{!!Form::label('category_name', 'Category Name')!!}
				{!!Form::text('category_name',null,['class'=>'form-control','placeholder'=>'Enter Category Name'])!!}
			</div>
			<div class="form-group"> 
				{!!Form::label('category_desc', 'Category Description')!!}
				{!!Form::textarea('category_desc',null,['class'=>'form-control','placeholder'=>'Enter Category Description'])!!}
			</div>
			<div class="form-group"> 
				{!!Form::submit('Update Category',['class'=>'btn btn-success'])!!}
			</div>
			{!!Form::close()!!}
		</div>
	</div>
</div>

@endsection