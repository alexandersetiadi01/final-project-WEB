<?php $__env->startSection('container'); ?>

</div>
    <p>Gender : <?php echo e($room->gender); ?></p>
    <p>Age : <?php echo e($room->age); ?></p>
    <p>Max : <?php echo e($room->max); ?></p>
    <p>Topic : </p>
    <?php echo e($room->topic); ?>

    <button type="button" class="btn btn-primary">Join</button>
    <button type="button" class="btn btn-secondary">Close</button>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Course\Projects\Web\RelaxnChat\resources\views/Detail/roomdetail.blade.php ENDPATH**/ ?>