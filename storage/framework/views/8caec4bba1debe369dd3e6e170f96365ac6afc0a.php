<?php $__env->startSection("content"); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 class="page-header">
				Add New Photo to <?php echo e($place->place_name); ?>

			</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<?php echo Form::open(['url' => 'photo/save', 'method' => 'post','files'=>'true']); ?>

			<?php echo Form::hidden('place_id',$place->id); ?>

			<div class="form-group"> 
				<?php echo Form::label('photo_name', 'Photo Name'); ?>

				<?php echo Form::text('photo_name',null,['class'=>'form-control','placeholder'=>'Enter Photo Name']); ?>

			</div>
			<div class="form-group"> 
				<?php echo Form::label('photo', 'Photo'); ?>

				<?php echo Form::file('photo',null,['class'=>'form-control','placeholder'=>'Enter Photo Name']); ?>

			</div>
			<div class="form-group"> 
				<?php echo Form::label('photo_desc', 'Photo Description'); ?>

				<?php echo Form::textarea('photo_desc',null,['class'=>'form-control','placeholder'=>'Enter Photo Description']); ?>

			</div>
			<div class="form-group"> 
				<?php echo Form::submit('Upload Photo',['class'=>'btn btn-success']); ?>

			</div>
			<?php echo Form::close(); ?>

		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>