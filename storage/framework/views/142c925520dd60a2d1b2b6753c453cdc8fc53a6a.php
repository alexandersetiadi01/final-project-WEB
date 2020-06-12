<div class="scrollpage">
    <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($message->from != Auth::user()->id): ?>
            <div class="incoming">
                <div class="message_received">
                    <?php
                        $user = DB::table('users')->where('id' , $message->from)->get();
                    ?>
                    <div class="row ml-1">
                        <small class="col"><?php echo e($user->pluck('firstname')->first()); ?> <?php echo e($user->pluck('lastname')->first()); ?></small>
                    </div>
                    <p class="row mt-1"> <?php echo e($message->message); ?></p>
                    <div  class="received">
                        <small class="time_date mt-1"> <?php echo e(date('d M y | H:i a' , strtotime($message->created_at))); ?></small>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="outgoing">
                <div class="message_sent">
                        <p> <?php echo e($message->message); ?></p>
                    <div  class="sent">
                        <small class="time_date"> <?php echo e(date('d M y | H:i a' , strtotime($message->created_at))); ?></small>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<div class="type_msg mr-2">
    <div class="input_field">
        <input type="text" class="write_msg" placeholder="Type a message">

    </div>
</div>
<?php /**PATH D:\Course\Projects\Web\RelaxnChat\resources\views/public.blade.php ENDPATH**/ ?>