<?php $__env->startSection('title' , 'Home'); ?>


<?php $__env->startSection('container'); ?>

<?php if(session('joined')): ?>
<div class="alert alert-success">
    <?php echo e(session('joined')); ?>

</div>
<?php endif; ?>

<?php if(session('fails')): ?>
<div class="alert alert-danger">
    <?php echo e(session('fails')); ?>

</div>
<?php endif; ?>

<body>
    <div class="container-fluid">
        <div class="card-body">
            <div class="row">
                <div class = "ml-3">
                    <h1>
                        All Rooms
                    </h1>
                </div>
            </div>
            <div class="row mt-2 roomtable">
                <div class="col-sm-12">
                    <table class="table table-bordered" id="roomtable" width="100%" cellspacing="0" role="grid">
                        <thead>
                            <tr role="row">


                                <th class="th-sm">Room</th>
                                <th class="th-sm">Topic</th>
                                <th class="th-sm">Gender</th>
                                <th class="th-sm">Capacity</th>
                                <th class="th-sm">Age</th>
                                <th class="th-sm">Host</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr role="row" class="odd">

                                <td><?php echo e($room->name); ?></td>
                                <td><?php echo e($room->topic); ?></td>

                                <?php if( $room->gender == "All"): ?>
                                    <td><?php echo e($room->gender); ?></td>
                                <?php else: ?>
                                    <td><?php echo e($room->gender); ?> Only</td>
                                <?php endif; ?>
                                <td><?php echo e(DB::table('members')->where('roomID' , $room->id)->count('memberID')); ?> / <?php echo e($room->max); ?></td>
                                <td><?php echo e($room->age); ?></td>
                                <td><?php echo e($room->host); ?></td>
                                <td>
                                    <form action="<?php echo e(route('joined' , array('id' => $room->id))); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <button class="btn btn-success" type="submit">Join</button>
                                    </form>

                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</body>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Course\Projects\Web\RelaxnChat\resources\views/home.blade.php ENDPATH**/ ?>