<?php $__env->startSection('title' , 'Friend'); ?>

<?php $__env->startSection('container'); ?>

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img src="/image/icon.png" alt="logo" style="height: 40px">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="friendlist">Friend List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Request</a>
            </li>
          </ul>
      </nav>
      <?php echo $__env->yieldContent('friend'); ?>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Course\Projects\Web\RelaxnChat\resources\views/friends.blade.php ENDPATH**/ ?>