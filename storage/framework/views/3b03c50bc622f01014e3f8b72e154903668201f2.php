<?php $__env->startSection('content'); ?>
<div class="container">
	<?php echo $__env->make('errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>Edit Category</h1>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<?php echo Form::model($category,['url' => 'category/update/'.$category->id, 'method' => 'post']); ?>

			<div class="form-group"> 
				<?php echo Form::label('category_name', 'Category Name'); ?>

				<?php echo Form::text('category_name',null,['class'=>'form-control','placeholder'=>'Enter Category Name']); ?>

			</div>
			<div class="form-group"> 
				<?php echo Form::label('category_desc', 'Category Description'); ?>

				<?php echo Form::textarea('category_desc',null,['class'=>'form-control','placeholder'=>'Enter Category Description']); ?>

			</div>
			<div class="form-group"> 
				<?php echo Form::submit('Update Category',['class'=>'btn btn-success']); ?>

			</div>
			<?php echo Form::close(); ?>

		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>