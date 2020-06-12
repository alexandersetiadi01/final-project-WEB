<?php $__env->startSection('title' , 'Private-Chat'); ?>

<?php $__env->startSection('container'); ?>

<div class="container">
    <div class="row no-gutters">
        <div class="room col-3">
            <div class="mt-0">
                <div class="searchbox">
                    <input class="form-control" id="searchcontact" type="search" placeholder="Search" aria-label="Search">
                </div>
            </div>
            <div class="vertical">
            </div>
        </div>
        <div class="roomname col">
            <h3 class= "friendname">

            </h3>
        </div>
        <div class="col">
            <h3 class= "features">

            </h3>
        </div>
    </div>
    <div class="horizontal">
    </div>
    <div class="roomcontainer">
        <div class="roompanel">
            <?php $__currentLoopData = $friends; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $friend): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="chat_list" id = <?php echo e($friend->id); ?> name=<?php echo e($friend->firstname); ?> last=<?php echo e($friend->lastname); ?>>
                        <div class="contact">
                            <div class="chat_content">
                                <h5 class="wait"><?php echo e($friend->firstname); ?> <?php echo e($friend->lastname); ?> <span><?php echo e($friend->age); ?></span></h5>
                                <span><?php echo e($friend->gender); ?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

    <div class="chat-panel">

    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Course\Projects\Web\RelaxnChat\resources\views/Chat/private_chat.blade.php ENDPATH**/ ?>