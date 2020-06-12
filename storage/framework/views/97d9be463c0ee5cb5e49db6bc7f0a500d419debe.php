<?php $__env->startSection('chatpanel'); ?>
<!--
<?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="<?php echo e(($message->from == Auth::user()->id) ? 'outgoing' : 'incoming'); ?>">
        <div class="<?php echo e(($message->from == Auth::user()->id) ? 'message_sent' : 'message_received'); ?>">
            <p><?php echo e($message->$message); ?></p>
            <small class="time_date"> <?php echo e(date('d M y, h:i a' , strtotime($message->created_at))); ?></small>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
-->
<div class="incoming">
    <div class="received_msg">
        <div class="message_received">
            <p>Test which is a new approach to have all
            solutions</p>
            <small class="time_date"> 11:01 AM    |    June 9</small>
        </div>
    </div>
</div>
<div class="outgoing">
    <div class="message_sent">
        <p>Test which is a new approach to have all
            solutions</p>
        <small class="time_date"> 11:01 AM    |    June 9</small>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('private_chat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Course\Projects\Web\RelaxnChat\resources\views/Chat/private.blade.php ENDPATH**/ ?>