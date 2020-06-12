<?php $__env->startSection('title' , 'Search'); ?>
<?php $__env->startSection('friend'); ?>

<div class="row justify-content-center mt-3">
    <form class="form-inline" action="<?php echo e(route('find', array('search' => "search" ))); ?>" method="GET" >
    <input class="form-control" name="search" type="search" placeholder="Search" aria-label="Search" value="<?php echo e(old('search')); ?>">
        <button class="btn btn-outline-success ml-2" type="submit" >Search</button>
    </form>
</div>
<div class = "row mt-3">
    <div class = "col-12">
        <div class="col-sm-12">
            <table class="table table-bordered" width="100%" id="roomtable" cellspacing="0" role="grid">
                <tbody>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?></td>
                        <td><?php echo e($user->gender); ?></td>
                        <td><?php echo e($user->age); ?></td>
                        <td>
                            <div class="btn-group">
                                <form action="<?php echo e(route('add' , array('id' => $user->id))); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <button class="btn btn-success " type="submit">Add Friend</button>
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

<?php if(session('added')): ?>
    <div class="alert alert-success">
        <?php echo e(session('added')); ?>

    </div>
<?php endif; ?>

<?php if(session('fails')): ?>
    <div class="alert alert-danger">
        <?php echo e(session('fails')); ?>

    </div>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.friends', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Course\Projects\Web\RelaxnChat\resources\views/Friend/searchpeople.blade.php ENDPATH**/ ?>