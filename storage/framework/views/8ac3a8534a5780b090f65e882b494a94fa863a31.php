
<div class="scrollpage">
    <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="<?php echo e(($message->from == Auth::user()->id) ? 'outgoing' : 'incoming'); ?>">
            <div class="<?php echo e(($message->from == Auth::user()->id) ? 'message_sent' : 'message_received'); ?>">
                <p> <?php echo e($message->message); ?></p>
                <div  class="<?php echo e(($message->from == Auth::user()->id) ? 'sent' : 'received'); ?>">
                    <small class="time_date"> <?php echo e(date('d M y | H:i a' , strtotime($message->created_at))); ?></small>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<div class="type_msg mr-2">
    <div class="input_field">
        <input type="text" class="write_msg" placeholder="Type a message" style="border: 1px salmon solid; border-radius:10px; margin-top:1px;">
    </div>
</div>








<?php /**PATH D:\Course\Projects\Web\RelaxnChat\resources\views/private.blade.php ENDPATH**/ ?>