<?php $__env->startSection('content'); ?>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h3>Create New Post</h3>
			<?php echo Form::open(array('route' => 'posts.store')); ?>

    			<?php echo e(Form::label('title','Title:')); ?>

    			<?php echo e(Form::text('title',null,array('class' =>'form-control'))); ?>


    			
    			
    			<?php echo e(Form::label('description','Post Body')); ?>

    			<?php echo e(Form::textarea('description',null,array('class'=> 'form-control'))); ?>



    			<?php echo e(Form::submit('Create Post',array('class' => 'btn btn-success btn-lg btn-block'))); ?>



			<?php echo Form::close(); ?>

		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>