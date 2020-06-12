<?php $__env->startSection('title' , 'Public-Chat'); ?>

<?php $__env->startSection('container'); ?>

<?php if(session('LeaveRoom')): ?>
    <div class="alert alert-danger">
        <?php echo e(session('LeaveRoom')); ?>

    </div>
<?php endif; ?>

<div class="container">
        <div class="row no-gutters">
            <div class="room col-3">
                <div class="mt-0">
                    <div class="searchbox">
                        <input class="form-control" type="search" id="searchroom" placeholder="Search" aria-label="Search">
                    </div>
                </div>
                <div class="vertical">
                </div>
            </div>
            <div class="roomname col">
                <h3 class= "roomsname">

                </h3>
            </div>
        </div>
    <div class="horizontal">
    </div>
    <div class="roomcontainer">
        <div class="roompanel">

            <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="chat_list_public" id = <?php echo e($room->id); ?>>
                <div class="contact row">
                    <div class="chat_content col">
                        <h5 class="wait">
                            <?php echo e($room->name); ?>

                        </h5>
                        <small>
                            <?php echo e($room->topic); ?>

                        </small>
                    </div>
                     <button type="button" style="padding: 0% " class="leaveroom col ml-3 mr-1 mt-2" action =<?php echo e(route('leaveroom' , $room->id)); ?>>Leave Room</button>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

        <div class="chat-panel_public">

        </div>


</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Course\Projects\Web\RelaxnChat\resources\views/Chat/public_chat.blade.php ENDPATH**/ ?>