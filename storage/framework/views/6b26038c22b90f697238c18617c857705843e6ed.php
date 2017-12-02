<?php $__env->startSection("content"); ?>

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
			<a href="<?php echo e(url('category/add')); ?>" class="btn btn-success">Add</a>
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
					<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><?php echo e($c->category_name); ?></td>
							<td><?php echo e($c->category_desc); ?></td>
							<td>
								<a href="<?php echo e(url('category/edit/'.$c->id)); ?>" class="btn btn-warning">Edit</a>
								<a href="<?php echo e(url('category/delete/'.$c->id)); ?>" class="btn btn-danger" onclick="return confirm('Are You Sure');">Delete</a>
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