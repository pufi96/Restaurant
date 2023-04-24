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
                        Menus
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Pages -->
    <div class="container min-vh-100 mt-4">
        <form action="<?php echo e(route('menusChange')); ?>" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label"><?php echo e($menu->nameMenu); ?></label>
                <input type="text" class="form-control" id="name" name="name" />
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label"><?php echo e($menu->descMenu); ?></label>
                <input type="text" class="form-control" id="desc" name="desc" />
            </div>
            <div class="mb-3">
                <label for="alt" class="form-label"><?php echo e($menu->altMenu); ?></label>
                <input type="text" class="form-control" id="alt" name="alt" />
            </div>
            <div class="mb-3">
                <label for="price" class="form-label"><?php echo e($menu->price); ?></label>
                <input type="number" class="form-control" id="price" name="price" />
            </div>
            <div class="mb-5">
                <label for="type" class="form-label">Type</label>
                <select name="type" id="type">
                    <option value="drinks">Drink</option>
                    <option value="lunch">Lunch</option>
                    <option value="dinner">Dinner</option>
                </select>
                <span class="ml-5">
                    <label for="visible" class="form-label ml-3">Visible:</label>
                    <input type="radio" name="visible" value="1" checked/>
                    <label for="visible" class="form-label ml-3">Not visible:</label>
                    <input type="radio" name="visible" value="0"/>
                </span>
                <span>
                    <label for="img" class="form-label ml-5 mr-3">Image:</label>
                    <input type="file" name="img" id="img"/>
                    <img src="images/<?php echo e($menu->imgMenu); ?>" alt="<?php echo e($menu->altMenu); ?>"/>
                </span>
                <span>
                    <input type="submit" class="btn btn-success my-2" value="Change"/>
                </span>
            </div>
            <?php echo csrf_field(); ?>
        </form>
    </div>
    <!-- /.container -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Restaurants\resources\views/pages/menu/edit.blade.php ENDPATH**/ ?>
