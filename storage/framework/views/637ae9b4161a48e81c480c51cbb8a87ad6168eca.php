<?php $__env->startSection("content"); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 class="page-header">
				All Photo of <?php echo e($place->place_name); ?>

			</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2 col-md-offset-10">
			<a href="<?php echo e(url('photo/add/'.$place->id)); ?>" class="btn btn-success">Add New</a>
		</div>
	</div>
	<div class="row">
			<?php $__currentLoopData = $photo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-md-4">
				<div class="thumbnail">
					<img src="<?php echo e(asset('uploads/'.$p->photo)); ?>" style="height: 250px" />
					<div class="caption"><?php echo e($p->photo_name); ?>

						<a href="<?php echo e(url('photo/delete/'.$p->id)); ?>" onclick="return confirm('are you sure')" class="btn btn-danger pull-right">X</a>
						<p><?php echo e($p->photo_desc); ?></p>
					</div>
				</div>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>