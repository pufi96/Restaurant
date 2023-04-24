<!DOCTYPE html>
<html lang="en">
    <!-- Head -->
    <?php echo $__env->make('fixed.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
    <!-- Navigation -->
    <?php echo $__env->make('fixed.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Page Content -->
    <?php echo $__env->yieldContent('content'); ?>
    <!-- Footer -->
    <?php echo $__env->make('fixed.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- JavaScript -->
    <?php echo $__env->make('fixed.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Restaurants\resources\views/layouts/layout.blade.php ENDPATH**/ ?>