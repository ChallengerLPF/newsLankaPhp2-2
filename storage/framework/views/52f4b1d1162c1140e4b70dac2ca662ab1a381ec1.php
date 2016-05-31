<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-2">
         <?php echo $__env->make('partials._leftbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        
    </div>

        <div class="col-md-7">
            <?php echo $__env->make('partials._main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                   
        </ul>
        

</div>
        </div>
 </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>