<?php $__env->startSection('title'); ?> Menus <?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?> Preview users. <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?> shop, online, contact, about <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- Start All Pages -->
    <div class="all-page-title page-breadcrumb">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>
                        User
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Pages -->
    <div class="container min-vh-100 mt-4">
        <form action="<?php echo e(route('userChange', $user->id)); ?>" method="GET" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo e($user->nameUser); ?>"/>
            </div>
            <div class="mb-3">
                <label for="surname" class="form-label">Surname</label>
                <input type="text" class="form-control" id="surname" name="surname" value="<?php echo e($user->surnameUser); ?>"/>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo e($user->email); ?>"/>
            </div>
            <span class="ml-5">
                    <label for="visible" class="form-label ml-3">Active</label>
                    <input type="radio" name="active" value="1" checked/>
                    <label for="visible" class="form-label ml-3">Not active:</label>
                    <input type="radio" name="active" value="0"/>
            </span>
            <select name="idRole" id="type">
                <option value="1">User</option>
                <option value="2">Admin</option>
            </select>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password"/>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Change</button>
            </div>
        </form>
    </div>
    <!-- /.container -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Restaurants\resources\views/panel/user/edit.blade.php ENDPATH**/ ?>