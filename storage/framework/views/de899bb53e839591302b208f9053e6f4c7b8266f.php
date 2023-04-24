<?php $__env->startSection('title'); ?> Users <?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?> Preview users. <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?> shop, online, contact, about <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- Start All Pages -->
    <div class="all-page-title page-breadcrumb">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>
                        Users
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Pages -->
    <div class="container min-vh-100 mt-4">
        <div class="mb-5">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($menu->id); ?></td>
                                    <td><?php echo e($menu->nameMenu); ?></td>
                                    <td><?php echo e($menu->descMenu); ?></td>
                                    <td><?php echo e($menu->altMenu); ?></td>
                                    <td><?php echo e($menu->price); ?></td>
                                    <td><?php echo e($menu->type); ?></td>
                                    <td><?php echo e($menu->visible); ?></td>
                                    <td>
                                        <a href="usersEdit.php?id=<?php echo e($menu->id); ?>" class="btn btn-primary my-2">Edit</a>
                                        <a href="usersDelete.php?id=<?php echo e($menu->id); ?>" class="btn btn-danger my-2">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Restaurants\resources\views/panel/menus.blade.php ENDPATH**/ ?>
