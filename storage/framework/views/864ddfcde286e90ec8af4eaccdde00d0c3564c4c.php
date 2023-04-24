<?php $__env->startSection('title'); ?> Contact <?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?> Learn more about us or contact us. <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?> shop, online, contact, about <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- Start All Pages -->
    <div class="all-page-title page-breadcrumb">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>
                        Contact
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Pages -->
    <div class="container min-vh-100 mt-4">
        <div class="mb-5">
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
            <form action="<?php echo e(route('contacting')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <!-- /.container -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Restaurants\resources\views/pages/contact.blade.php ENDPATH**/ ?>