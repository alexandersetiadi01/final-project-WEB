<?php $__env->startSection('title' , 'Register'); ?>

<?php $__env->startSection('Register'); ?>
    <div class="Register" id = "Register">
        <form method="POST" action="<?php echo e(URL::to('/')); ?>">
            <?php echo csrf_field(); ?>

            <div class="row">
                <div class="col-5">
                    <input type="text" class="FName" name="firstname" placeholder="First name" required>
                </div>
                <div class="col-5">
                    <input type="text" class="FName" name="lastname" placeholder="Last name" >
                </div>
            </div>
            <input type="email" class="EmailRegister" name="email" id="inputEmail3" placeholder="Email" required>
            <div class="row">
                <div class="col-5">
                    <input type="password" class="Passwords" name="password" placeholder="Password" required>
                </div>
                <div class="col-5">
                    <input type="password" class="Passwords" name="re-password" placeholder="Re-Enter Password" required>
                </div>
            </div>
            <input type="number" class="Age" id="inputage" name="age" placeholder="Age" min="0" required>
            <input type="checkbox" id="Male" name="gender" value="male" onclick="males()">
            <label>Male</label>
            &nbsp;
            <input type="checkbox" id="Female" name="gender" value="female" onclick="females()">
            <label >Female</label>
            <div>
                <div class="agreement">
                    <input type="checkbox" class="Agreementcheckbox" id="exampleCheck1" required>
                    <label class="form-check-label" for="exampleCheck1">I agree with the Terms and Conditions</label>
                </div>
                <button type="submit" class="register-btn" onclick="success()">Register</button>
            </div>
        </form>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Course\Projects\Web\RelaxnChat\resources\views/register.blade.php ENDPATH**/ ?>