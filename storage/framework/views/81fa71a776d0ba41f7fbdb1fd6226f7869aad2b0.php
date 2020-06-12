<?php $__env->startSection('title' , 'Private-Chat'); ?>

<?php $__env->startSection('container'); ?>

<div class="container">
    <div class="row no-gutters">
        <div class="room col-3">
            <div class="mt-0">
                <div class="searchbox">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                </div>
            </div>
            <div class="vertical">
            </div>
        </div>
        <div class="roomname">
            <h3>Hello</h3>
        </div>
    </div>
    <div class="horizontal">
    </div>
    <div class="roomcontainer">
            <div class="roompanel">

                <?php $__currentLoopData = $friends; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $friend): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="chat_list" id = <?php echo e($friend->id); ?>>
                    <div class="contact">
                        <div class="chat_content">
                            <h5><?php echo e($friend->firstname); ?> <?php echo e($friend->lastname); ?> <span class="chat_date">Dec 25</span></h5>
                            <p> i am going to kill you!!! </p>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>

        <div class="chat-panel">
            <div class="scrollpage">
                <?php echo $__env->yieldContent('chatpanel'); ?>
            </div>
            <div class="type_msg">
                <div class="input_field">
                    <input type="text" class="write_msg" placeholder="Type a message" />
                    <button type="button" class="send_message_btn">Send</button>
                </div>
            </div>
        </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Course\Projects\Web\RelaxnChat\resources\views/private_chat.blade.php ENDPATH**/ ?>