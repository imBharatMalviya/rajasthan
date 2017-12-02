<?php $__env->startSection("content"); ?>

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
			<?php echo Form::open(['url' => 'place/save', 'method' => 'post']); ?>

			<div class="form-group"> 
				<?php echo Form::label('category_id', 'Select Category'); ?>

				<?php echo Form::select('category_id',$category,null,['class'=>'form-control','placeholder'=>'Select Category']); ?>

			</div>
			<div class="form-group"> 
				<?php echo Form::label('place_name', 'Place Name'); ?>

				<?php echo Form::text('place_name',null,['class'=>'form-control','placeholder'=>'Enter Place Name']); ?>

			</div>
			<div class="form-group"> 
				<?php echo Form::label('place_history', 'Place History'); ?>

				<?php echo Form::textarea('place_history',null,['class'=>'form-control','placeholder'=>'Enter Place History']); ?>

			</div>
			<div class="row">
				<div class="col-md-6">
			<div class="form-group"> 
				<?php echo Form::label('lang', 'Place Longitute'); ?>

				<?php echo Form::text('lang',null,['class'=>'form-control','placeholder'=>'Enter Place Longitute']); ?>

			</div>
				</div>
				<div class="col-md-6">
			<div class="form-group"> 
				<?php echo Form::label('lat', 'Place latitute'); ?>

				<?php echo Form::text('lat',null,['class'=>'form-control','placeholder'=>'Enter Place latitute']); ?>

			</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
			<div class="form-group">
				<?php echo Form::label('timing_open', 'Place Timing Open'); ?>

				<?php echo Form::text('timing_open',null,['class'=>'form-control','placeholder'=>'Enter Place Open Timing']); ?>

			</div>
				</div>
				<div class="col-md-6">
			<div class="form-group"> 
				<?php echo Form::label('timing_close', 'Place Timing Close'); ?>

				<?php echo Form::text('timing_close',null,['class'=>'form-control','placeholder'=>'Enter Place Close Timing']); ?>

			</div>
				</div>
			</div>
			<div class="form-group"> 
				<?php echo Form::label('entry_fee', 'Place Entry Fee'); ?>

				<?php echo Form::text('entry_fee',null,['class'=>'form-control','placeholder'=>'Enter Place Entry Fee']); ?>

			</div>
			<div class="form-group"> 
				<?php echo Form::label('place_address', 'Place Address'); ?>

				<?php echo Form::textarea('place_address',null,['class'=>'form-control','placeholder'=>'Enter Place Address']); ?>

			</div>
			<div class="form-group"> 
				<?php echo Form::submit('Save Place',['class'=>'btn btn-success']); ?>

			</div>
			<?php echo Form::close(); ?>

		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>