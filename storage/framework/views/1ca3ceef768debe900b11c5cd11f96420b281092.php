<?php $__env->startSection("content"); ?>

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
			<a href="<?php echo e(url('place/add')); ?>" class="btn btn-success">Add</a>
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
					<?php $__currentLoopData = $place; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><?php echo e($c->place_name); ?></td>
							<td><?php echo e($c->category_name); ?></td>
							<td>
								<a href="<?php echo e(url('place/edit/'.$c->id)); ?>" class="btn btn-warning">Edit</a>
								<a href="<?php echo e(url('place/delete/'.$c->id)); ?>" class="btn btn-danger" onclick="return confirm('Are You Sure');">Delete</a>
								<a href="<?php echo e(url('photo/'.$c->id)); ?>" class="btn btn-info">Photos</a>
							</td>
						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>