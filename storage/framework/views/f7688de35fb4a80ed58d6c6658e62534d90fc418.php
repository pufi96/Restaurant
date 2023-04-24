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
    <div class="container min-vh-100 mt-4 ">
        <form action="<?php echo e(route('doRegistration')); ?>" method="POST">
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
                <button type="submit" class="btn btn-primary mb-5">Create</button>
            </div>
            <?php echo csrf_field(); ?>
        </form>
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
                                <th>Edit</th>
                                <th>Change Status</th>
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
                                <th>Edit</th>
                                <th>Change Status</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($user->id); ?></td>
                                    <td><?php echo e($user->nameUser); ?></td>
                                    <td><?php echo e($user->surnameUser); ?></td>
                                    <td><?php echo e($user->email); ?></td>
                                    <td><?php echo e($user->idRole); ?></td>
                                    <td><?php echo e($user->active); ?></td>
                                    <td>
                                        <form action="<?php echo e(route('usersChange', $user->id)); ?>" method="GET">
                                            <input type="submit" class="btn btn-success my-2" value="Change"/>
                                            <?php echo csrf_field(); ?>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="<?php echo e(route('usersActive', $user->id)); ?>" method="GET">
                                            <input type="submit" class="btn btn-success my-2" value="Change"/>
                                            <?php echo csrf_field(); ?>
                                        </form>
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

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Restaurants\resources\views/panel/users.blade.php ENDPATH**/ ?>