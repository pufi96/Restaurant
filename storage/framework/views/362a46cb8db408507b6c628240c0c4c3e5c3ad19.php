<?php $__env->startSection('title'); ?> Login <?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?> Log into your account. <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?> shop, online, login <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Start All Pages -->
    <div class="all-page-title page-breadcrumb">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>
                        Registration
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Pages -->
    <div class="container col-12">

    </div>
        <div class="container min-vh-100 mt-4 mb-4 col-6">
            <?php if(Session::get('error')): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo e(Session::get('error')); ?>

                </div>
            <?php endif; ?>
            <?php if(Session::get('succ')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(Session::get('succ')); ?>

                </div>
            <?php endif; ?>
            <form action="<?php echo e(route('doRegistration')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" />
                </div>
                <div class="mb-3">
                    <label for="surname" class="form-label">Surname</label>
                    <input type="text" class="form-control" id="surname" name="surname" />
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" />
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" />
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Restaurants\resources\views/pages/registration.blade.php ENDPATH**/ ?>