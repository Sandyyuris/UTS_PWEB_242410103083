<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
    <div class="col-md-5">

        <?php if(session('error')): ?>
            <?php echo $__env->make('components.alert_notif', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php endif; ?>

        <div class="card bg-cream shadow-premium border-0 rounded-5 mt-4">
            <div class="card-header bg-cream text-teal text-center p-4 border-0 rounded-top-5">
                <h3 class="fw-bolder my-2">LOGIN</h3>
            </div>
            <div class="card-body p-5">
                <form action="<?php echo e(route('login.post')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        <label for="password">Password</label>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-teal btn-lg mt-3 fw-bold rounded-pill">MASUK</button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center py-3 bg-light border-0 rounded-bottom-5">
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.guest', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\UTS-PWEB\resources\views/login.blade.php ENDPATH**/ ?>