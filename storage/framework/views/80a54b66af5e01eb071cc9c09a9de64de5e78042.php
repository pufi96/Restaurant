<?php $__env->startSection('title'); ?> Home <?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?> The main page of the restaurant. <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?> restaurant, food, eat, delicious, home <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Start All Pages -->
    <div class="all-page-title page-breadcrumb">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Special Menu</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Pages -->
    <!-- Start Menu -->
    <div class="menu-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-title text-center">
                        <h2>Special Menu</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".drinks">Drinks</button>
                            <button data-filter=".lunch">Lunch</button>
                            <button data-filter=".dinner">Dinner</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row special-list">
                <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6 special-grid <?php echo e($menu->type); ?>">
                        <div class="gallery-single fix">
                            <img src="images/<?php echo e($menu->imageMenu); ?>" class="img-fluid" alt="<?php echo e($menu->altMenu); ?>">
                            <div class="why-text">
                                <h4><?php echo e($menu->nameMenu); ?></h4>
                                <p><?php echo e($menu->descMenu); ?></p>
                                <h5> $<?php echo e($menu->price); ?></h5>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php echo e($menus->links()); ?>

        </div>

    </div>

    <!-- End Menu -->

    <!-- Start QT -->
    <div class="qt-box qt-background">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-left">
                    <p class="lead ">
                        " If you're not the one cooking, stay out of the way and compliment the chef. "
                    </p>
                    <span class="lead">Michael Strahan</span>
                </div>
            </div>
        </div>
    </div>
    <!-- End QT -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Restaurants\resources\views/pages/menu.blade.php ENDPATH**/ ?>