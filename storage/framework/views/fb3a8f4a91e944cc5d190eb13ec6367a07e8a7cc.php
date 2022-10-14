

<?php $__env->startSection('content'); ?>

    <div class="col-md-8">
        <div class="card border-0 shadow rounded">
            <div class="card-body">
                Welcome! <strong><?php echo e(auth()->user()->username); ?></strong>
                <hr>
                <a href="<?php echo e(route('logout')); ?>" style="cursor: pointer" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" class="btn btn-md btn-primary">LOGOUT</a>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo csrf_field(); ?>
                </form>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\form-login\resources\views/home.blade.php ENDPATH**/ ?>