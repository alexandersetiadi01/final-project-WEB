<?php $__env->startSection('title' , 'FriendList'); ?>
<?php $__env->startSection('friend'); ?>

<?php if(session('removed')): ?>
    <div class="alert alert-danger">
        <?php echo e(session('removed')); ?>

    </div>
<?php endif; ?>

<div class = "row mt-3">
    <div class = "col-12">
        <div class="col-sm-12">
            <table class="table table-bordered" width="100%" id="roomtable" cellspacing="0" role="grid">
                <thead>
                    <tr role="row">
                        <th class="th-sm">Name</th>
                        <th class="th-sm">Gender</th>
                        <th class="th-sm">Age</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $friends; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $friend): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td><?php echo e($friend->firstname); ?> <?php echo e($friend->lastname); ?></td>
                        <td><?php echo e($friend->gender); ?></td>
                        <td><?php echo e($friend->age); ?></td>
                        <td>
                            <div class="btn-group">
                                <form action="<?php echo e(route('unfriend' , array('id' => $friend->id))); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <button class="btn btn-danger ml-3" type="submit" onclick="">Unfriend</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.friends', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Course\Projects\Web\RelaxnChat\resources\views/Friend/friendlist.blade.php ENDPATH**/ ?>